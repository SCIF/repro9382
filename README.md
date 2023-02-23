# Reproduction for [#9382](https://github.com/vimeo/psalm/issues/9382)

## Build image
```bash
make build 
```

## Run without preload
```bash
make nopreload
./vendor/bin/psalm
```

You should see `No error found!`

## Run with preload
```bash
make preload
./vendor/bin/psalm
```

You should see `3 errors found`