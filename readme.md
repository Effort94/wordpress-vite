<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<!-- TABLE OF CONTENTS -->
<details>
    <summary>Table of Contents</summary>
    <ol>
        <li>
            <ul>
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
## About The Project

This project was created as an example of how Wordpress sites could be used in Docker.

This project is built with Docker, which containerises all the parts that make a wordpress site. More can be added
The existing can be changed. A container is whatever you desire it to be.

### Built With

 - Wordpress
 - Docker
 - Vite
 - Eslint

<!-- GETTING STARTED -->
## Getting Started

Install docker desktop for windows, make sure Docker is started.


1) Clone the repository and fetch the latest.
2) In root directory run command ``docker-compose build && docker-compose up``
3) Make sure you have node version 16 installed. You can do this using Node Version Manager (nvm install 16).
3) npm install
4) npm run build
5) npm run dev

Currently, npm run build automatically minifies css and js files. It also regenerates the css and js files for production
using the latest css and js changes.

npm run dev is only used as a HMR system. This means you can change any styling and it will automatically be applied,
without the need to refresh the page.

Either make sure to npm run build before commiting, or run this command in the bit bucket pipelines.

There are alternative ways to extend this further to cover any other gaps, this is just a bare basic backbone demo.