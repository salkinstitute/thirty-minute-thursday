# Docker Part 1

## Here's what we'll cover:
  1. [Why use Docker?](#why-use-docker)
  2. [Run a command](#running-commands) on a specific version of php or python with a disposable container.
  3. [Run a stack](#run-a-stack) using a docker-compose file  in your code-repo.
  4. [Make your containers available on DockerHub](#using-dockerhub) so that you can also deploy remotely.
  5. [Changing env variables (from .env)](#using-env-vars) instead of changing code for different deployments or container roles.
  6. [Examples](#examples)
  7. [Helpful scripts](#helpful-scripts)

#### Video Link

### Pre-requisites
- Latest version of Docker
- docker-compose
- Shutdown any other services that may be running on conflicting ports 
- Checked out this repo to your local computer

### Why use Docker
Quickly build predictable containers to develop and deploy applications, using infrastructure as code.  Docker has a rich eco-system of prebuilt containers including those from all major service vendors (list here). Dockerfiles can be versioned and stored within application directories so that all developers can develop in a identical environment.  

### Running Commands
```
# Search Pubmed using PHP 8 and curl.
# I'm wgeting the file, TODO
docker run --rm -it -v ${PWD}:/tmp php:8 php /tmp/search_pubmed_by_title.php "Cell Division"
```

### Run a Stack
Stub
### Using DockerHub
Stub
### Using Env Vars extensively
Stub
### Examples
Stub
### Helpful Scripts
Stub
