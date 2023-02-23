build:
	docker build . -t reprod9382

preload:
	docker run --rm -e PRELOAD=1 -ti reprod9382 /bin/sh

nopreload:
	docker run --rm -e PRELOAD=0 -ti reprod9382 /bin/sh
