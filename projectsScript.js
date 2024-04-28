/*
* Wanted to try out using Javascript to dynamically create HTML code from a JSON file.
*/
document.addEventListener("DOMContentLoaded", function() {
    fetch('./projects.json')
        .then(response => response.json())
        .then(data => {
            const projects = data.projects;
            const projectsContainer = document.querySelector('.list');

            projects.forEach(project => {
                const panel = document.createElement('div');
                panel.classList.add('panel');

                const textSection1 = document.createElement('div');
                textSection1.classList.add('text-section');

                const projectName = document.createElement('h5');
                projectName.classList.add('display-inline');
                projectName.textContent = project.projectName;

                const textSection2 = document.createElement('div');
                textSection2.classList.add('text-section');

                const languages = document.createElement('div');
                languages.classList.add('text-lead');
                languages.classList.add('display-inline');
                languages.textContent = 'Language(s): ' + project.languages;

                const textSection3 = document.createElement('div');
                textSection3.classList.add('text-section');

                const description = document.createElement('div');
                description.classList.add('text-lead');
                description.textContent = project.description;

                const textSection4 = document.createElement('div');
                textSection4.classList.add('text-section');

                const githubLink = document.createElement('a');
                githubLink.classList.add('githubLink');
                githubLink.textContent = 'GitHub Repository';
                githubLink.href = project.github;
                githubLink.target = '_blank';

                panel.appendChild(textSection1);
                textSection1.appendChild(projectName);

                panel.appendChild(textSection2);
                textSection2.appendChild(languages);

                panel.appendChild(textSection3);
                textSection3.appendChild(description);

                panel.appendChild(textSection4);
                textSection4.appendChild(githubLink);

                projectsContainer.appendChild(panel);
            });
        })
        .catch(error => console.error('Error loading projects:', error));
});
