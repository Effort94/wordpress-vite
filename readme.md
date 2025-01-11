<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<!-- TABLE OF CONTENTS -->
<details>
    <summary>Table of Contents</summary>
    <ol>
        <li>
            <ul>
                <li><a href="#about-the-project">About The Project</a></li>
                <li><a href="#built-with">Built With</a></li>
            </ul>
        </li>
        <li>
            <a href="#getting-started">Getting Started</a>
            <ul>
                <li><a href="#prerequisites">Prerequisites</a></li>
                <li><a href="#installation">Installation</a></li>
            </ul>
        </li>
        <li><a href="#usage">Usage</a></li>
    </ol>
</details>



<!-- ABOUT THE PROJECT -->
# About The Project

This project was created as an example of how Wordpress sites could be used in Docker.

This project is built with Docker, which containerises the database, phpmyadmin and wordpress. The project uses
node v16.0 and Vite to handle all the assets building and compiling.

# Built With

 - Wordpress
 - Docker
 - Vite

<!-- GETTING STARTED -->
# Getting Started

Install docker desktop for windows, make sure Docker is started. You can have two options, you can either clone the project
in Windows or in Linux. The recommended way is Linux, as it will drastically improve build and load speeds compared to windows.

When installing docker, it will automatically create the WSL network folder. Once found, do the following steps.

1) Navigate to /home and create a new directory to store all applications. e.g /applications
2) In your chosen code editor, open the $wsl/home/applications directory you created.
3) git clone the repository. **Note: If you have not done so, you will need to create SSH keys and add them to the repository**
4) cd into the project and run command ``docker-compose build && docker-compose up``

This will create all the containers required. From here, we will now need to install all the tools required for the containers
to work.

1) Make sure to have node version 16 installed. You can use [NVM](https://github.com/nvm-sh/nvm) to manage multiple node versions.
2) ``npm install && npm run dev``
3) Navigate to your localhost and test it all works.

This will auto compile everything required for the project to run.

<!-- HOW IT WORKS -->
# How it Works

## Development

When developing, you will use ``npm run dev``.

npm run dev is only used as a HMR system. This means you can change any styling and it will automatically be applied,
without the need to refresh the page.

## Pre-commit
Once development is done, and you're ready to commit changes, you will need to run ``npm run build``