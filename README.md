# QuarkApp
This is a sample application of the Quark-based project. It can be easily used in different ways:

 - Cloning of this repository then connecting it with `Quark` framework by specifying its location in `loader.php` file.
 - Downloading this repository with same further steps
 - Using the `composer create-project qybercom/quark-app` command

For first two options please refer to `Quark` [README](https://github.com/Qybercom/quark/blob/master/README.md)

## Docker

This repository is equipped with ready-to-use `Dockerfile`, `docker-compose.yml` and some other DevOps configs. You can change them to fit for your purposes (adding/removing packages, setting listening ports, `PHP` and `NginX` configuration options).

> Please note that `./runtime` directory is excluded in the `.dockerignore` for letting users link actual config files by orchestration mechanisms (such as `docker-compose` or `Kubernetes`).
> the `./.devops/docker/filesystem/app/runtime` directory is useful for storing and linking of the default or common application settings