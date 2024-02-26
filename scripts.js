document.addEventListener("DOMContentLoaded", function() {
    fetch('./projects.json')
        .then(response => response.json())
        .then(data => {
            const projects = data.projects;
            const projectsContainer = document.getElementById('projects-container');

            projects.forEach(project => {
                const projectDiv = document.createElement('div');
                projectDiv.classList.add('projectItemContainer');
                projectDiv.setAttribute('onclick', 'toggleDescription(this)');

                const projectName = document.createElement('h3');
                projectName.classList.add('projectName');
                projectName.textContent = project.projectName;
                
                const details = document.createElement('div');
                details.classList.add('details');

                const languages = document.createElement('p');
                languages.classList.add('languages');
                languages.textContent = 'Language(s): ' + project.languages;

                const description = document.createElement('p');
                description.classList.add('description');
                description.textContent = project.description;

                const githubLink = document.createElement('a');
                githubLink.classList.add('githubLink');
                githubLink.textContent = 'GitHub Repository';
                githubLink.href = project.github;
                githubLink.target = '_blank';

                projectDiv.appendChild(projectName);
                details.appendChild(languages);
                details.appendChild(description);
                details.appendChild(githubLink);

                projectDiv.appendChild(details);

                projectsContainer.appendChild(projectDiv);
            });
        })
        .catch(error => console.error('Error loading projects:', error));
});
