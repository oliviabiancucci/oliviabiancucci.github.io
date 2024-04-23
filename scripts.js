document.addEventListener("DOMContentLoaded", function() {
    fetch('./projects.json')
        .then(response => response.json())
        .then(data => {
            const projects = data.projects;
            const projectsContainer = document.querySelector('.list');
            console.log('hello');

            projects.forEach(project => {
                const panel = document.createElement('div');
                panel.classList.add('panel');

                const panelBody = document.createElement('div');
                panelBody.classList.add('panel-body');

                const projectName = document.createElement('h5');
                projectName.classList.add('display-inline');
                projectName.textContent = project.projectName;

                const languages = document.createElement('div');
                languages.classList.add('text-lead');
                languages.classList.add('display-inline');
                languages.textContent = 'Language(s): ' + project.languages;

                const description = document.createElement('div');
                description.classList.add('text-lead');
                description.textContent = project.description;

                const githubLink = document.createElement('a');
                githubLink.classList.add('githubLink');
                githubLink.textContent = 'GitHub Repository';
                githubLink.href = project.github;
                githubLink.target = '_blank';

                panelBody.appendChild(projectName);
                panelBody.appendChild(languages);
                panelBody.appendChild(description);
                panelBody.appendChild(githubLink);

                panel.appendChild(panelBody);

                projectsContainer.appendChild(panel);
            });
        })
        .catch(error => console.error('Error loading projects:', error));
});
