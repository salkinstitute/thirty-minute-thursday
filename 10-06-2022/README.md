# Docker Part 1
This will be an introduction of the different aspects of using containers locally. 

## Here's what we'll cover:
  1. [Why use Docker?](#why-use-docker)
  2. [Run a Container](#running-containers) on a specific version of php or python with a disposable container.
  3. [Run a stack](#running-stacks) using a docker-compose file in your code-repo.

#### Video Link
[Zoom Recording](https://us06web.zoom.us/rec/share/mj7CXWTB3MEcK2GowzYSCVsA8G7lB2u5Bfq70ojOEnzRE9S_zZHbavlVkHxgi6AY.GLaAKU_HfmnqSwJO) Passcode: KxrFY5A$
### Pre-requisites
- [Install the latest version of Docker Desktop](https://docs.docker.com/engine/install/)
- Shutdown any other services that may be running on conflicting ports 
- Checked out this repo to your local computer and a terminal opened to this directory.
```
# Clone to a directory on your local system, if already exists, do a git pull
git clone https://github.com/salkinstitute/thirty-minute-thursday 
cd thirty-minute-thursday/10-06-2022
```

### Why use Docker
Quickly build predictable containers to develop and deploy applications, using infrastructure as code.  [Docker has a rich eco-system of prebuilt containers including those from all major service vendors](https://hub.docker.com/). Dockerfiles can be versioned and stored within application directories so that all developers can develop in a identical environment.  

### Running Containers 
#### From a prebuilt image
This command spins up a disposable(--rm) php8 container with an interactive terminal (-it), mounts the current local directory on the /tmp folder in the container and executes a script that searches pubmed titles with a provided string argument. 
```
# Search Pubmed using PHP 8 and curl.
docker run --rm -it -v ${PWD}:/tmp php:8 php /tmp/search_pubmed_by_title.php "Cell Division"
```
#### From a custom image
```
# Helpful Links
# https://docs.docker.com/reference/
# https://dockerlabs.collabnix.com/docker/cheatsheet/

# Look for a Dockerfile in the working directory and build a container
# The '-t' option is used to tag(name) the image in format reponame/version
docker build -t tmt/100622 .
# Now we bring up the container and get a bash shell
docker run -it --rm tmt/100622 bash
# check our php version
php -v
# See what's installed in composer
composer show -i
# See that artisan is working
php artisan tinker
```
### Running Stacks
#### Preview of Part 2.
Running stacks, or multiple container simultaneously is the most common way to use Docker.  This is accomplished by using a command called docker-compose instead of docker commands directly.
Compose (docker-compose) is written in yaml markup in a file called docker-compose.yml
Each of the containers are listed under the 'services' attribute. 
Probably out of time here.  I will cover using Stacks and Compose next week, it will get way more interesting and useful then, but we needed a place to start.

