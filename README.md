# Docker - PHP

[Docker PHP][1] is a **Docker and PHP** repository which accompanies [a YouTube tutorial][2].

Setup
------------

* For a standard build / setup, simply run
```docker compose up -d ```
* For a development build which exposes DB ports and includes Xdebug, you can run the dev-mode shell script like so
```sh ./bin/dev-mode.sh -d```
* To run with Xdebug enabled, run 
```XDEBUG_MODE=debug sh ./bin/dev-mode.sh -d --build```
 

Contributing
------------

Thank to Gary Clark for his docker containers and a very nice tutorial about Docker.
[1]: https://github.com/GaryClarke/docker-php
[2]: https://youtu.be/qv-P_rPFw4c
