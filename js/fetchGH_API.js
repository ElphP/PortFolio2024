// id des repository qui ne seront pas affichés....
let TabHiddenRepo = [783582371, 741881552, 584430594, 758398747];
let tabMois = [
    "janv.",
    "fev.",
    "mars",
    "avril",
    "mai",
    "juin",
    "juil.",
    "août",
    "sept.",
    "oct.",
    "nov.",
    "déc.",
];

const contentDepot = (
    image,
    langage,
    name,
    created_at,
    updated_at,
    datalang,
    repo,
    description,
    readMe,
    technos,
    demo
) => {
    let templateCardGH = `
   <div class="templateGH">
     <div class="contain1">
       ${image ?? ""}
        <div class="dataGH">
            <p><span class="titreGH">Nom du dépôt: </span> <span class="donnee">${name}</span></p>
            <p><span class="titreGH">Langage principal:</span> <span class="donnee">${langage}</span></p>
            <p><span class="titreGH">Date de création: </span> <span class="donnee">${created_at}</span> <span class="titreGH">Date de mise à jour: </span> <span class="donnee">${updated_at}</span></p>
            <p><span class="titreGH">Description: </span> <span class="donnee">${description}</span> </p>
            <p><span class="titreGH">Langages utilisés:</span><br>${datalang}</p> 
        </div>
    </div>
      <h2>Liens:</h2>
       <div class="contain2">
        <p><span class="lien"><a href=${repo} target="_blank" rel="noopener noreferrer">Repository</a></span></p>
        ${readMe ?? ""}
        ${technos ?? ""}
        ${demo ?? ""}
        </div>
</div>
 `;

    return templateCardGH;
};

async function contentGH() {
    let content = "";
    // Montre l'indicateur de chargement
    document.getElementById("loading").style.display = "flex";

    try {
        const response = await fetch(
            "index.php?github_data=https://api.github.com/user/repos?sort=created&direction=desc",
            {
                method: "GET",
                headers: {
                    "Content-Type": "application/json",
                },
            }
        );

        const dataResponse = await response.json();
        if (!response.ok) {
            console.error("Erreur de récupération du JSON depuis l'API");
        } else {
            for (const object of dataResponse) {
                if (!TabHiddenRepo.includes(object.id)) {
                    let created = changeDate(object.created_at);
                    let updated = changeDate(object.updated_at);

                    let languageURL_Server = `index.php?github_data=https://api.github.com/repos/ElphP/${object.name}/languages`;

                    // Attendre que `traitementLanguages` retourne le résultat
                    let dataLanguages = await traitementLanguages(
                        languageURL_Server
                    );

                    // vérifie les fichiers présents (image, readme, techno?) renvoie un tableau de 3 entrées soit nulles soit avec le contenu de l'URL
                    let contentsURL_server = `index.php?github_data=https://api.github.com/repos/ElphP/${object.name}/contents`;

                    let contentsFile = await checkContents(
                        contentsURL_server,
                        object.name
                    );
                   
                    
                   
                   

                    // traitement des résultats des promises
                    // gestion de l'image
                    let image = "";
                    if (contentsFile[0]) {
                        let link = contentsFile[0].substring(23);
                        image = `<a href=${link}  target="_blank" rel="noopener noreferrer">
            <img src=${contentsFile[0]}  alt="image_Illustrant_Le_Dépot" />
        </a>`;
                    } else {
                        image = `
            <img src='../PortFolio2024/img/icones/noimage.jpg' alt="noImage" />`;
                    }

                    let readMe = null;
                    if (contentsFile[1]) {
                        readMe = `<p><span class="lien"><a href=${contentsFile[1]} target="_blank" rel="noopener noreferrer">Fichier ReadMe</a></span></p>`;
                    }

                    let technos = null;
                    if (contentsFile[2]) {
                        technos = `<p><span class="lien"><a href=${contentsFile[2]} target="_blank" rel="noopener noreferrer">Détail Technos</a></span></p>`;
                    }





                    let demo = null;
                    if (object.homepage) {
                        demo = `<p><span class="lien"><a href=${object.homepage} target="_blank" rel="noopener noreferrer">Demo</a></span></p>`;
                    }

                    let cardEntity = contentDepot(
                        image,
                        object.language,
                        object.name,
                        created,
                        updated,
                        dataLanguages, // Ici, on a les données de langue prêtes
                        object.html_url,
                        object.description,
                        readMe,
                        technos,
                        demo
                    );

                    content += cardEntity;
                }
            }
        }
    } catch (error) {
        console.error("Erreur:", error);
    } finally {
        // ici fin du loader
        document.getElementById("loading").style.display = "none";
        return content;
    }
}

function changeDate(date) {
    return (
        date.substr(8, 2) +
        " " +
        tabMois[date.substr(5, 2) - 1] +
        " " +
        date.substr(0, 4)
    );
}

async function traitementLanguages(languagesURL) {
    let textResponse = "";
    try {
        const response = await fetch(languagesURL, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        });

        const dataResponse = await response.json();
        if (!response.ok) {
            console.error(
                "Erreur de récupération du JSON languages depuis l'API"
            );
        } else {
            let sum = 0;
            let tabTechnos = [];
            for (let [key, value] of Object.entries(dataResponse)) {
                sum += value;
            }

            for (let [key, value] of Object.entries(dataResponse)) {
                tabTechnos[key] = ((value / sum) * 100).toFixed(1);
            }

            for (const key in tabTechnos) {
                textResponse +=
                    `<span class="donnee">${key}</span>` +
                    ": " +
                    tabTechnos[key] +
                    "%  - ";
            }
        }
    } catch (error) {
        console.error("Erreur:", error);
    }

    return textResponse;
}


// vérification de l'existence de 3 fichiers/dossiers à la racine etretour URL si c'est le cas dans un tableau
async function checkContents(URLContents, name) {
    let arrayContents = [];
    try {
        const response = await fetch(URLContents, {
            method: "GET",
            headers: {
                "Content-Type": "application/json",
            },
        });

        let dataResponse = await response.json();
       
      const urlMapping = {
          "screenshots": `index.php?github_data=https://raw.githubusercontent.com/ElphP/${name}/main/screenshots/image.jpg`,
          "README.md": `index.php?github_data=https://github.com/ElphP/${name}/blob/main/README.md`,
          "technologies.md": `index.php?github_data=https://github.com/ElphP/${name}/blob/main/technologies.md`,
      };

      dataResponse.forEach((object) => {
          if (urlMapping[object.name]) {
              const index =
                  object.name === "screenshots"
                      ? 0
                      : object.name === "README.md"
                      ? 1
                      : 2;
              arrayContents[index] = urlMapping[object.name];
          }
      });

        

      return arrayContents;

    } catch (error) {
        console.error("Erreur:", error);
    }
}

export { contentGH };
