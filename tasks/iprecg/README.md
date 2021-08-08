# IP recognition using MaxMind GeoIP

## What

Docker container example for translating GeoIP into country information.

Using MaxMind's Database.

## How to use

1. Get GeoLite2-Country.mmdb and put into the same folder
2. Run command:

```bash
docker build -t phpip .

docker run --name phpip1 -it phpip
```

3. You can find the output:

```bash
string(2) "US"
string(13) "United States"
string(21) "アメリカ合衆国"
```

## References

Regarding to the database:

https://dev.maxmind.com/geoip/geolite2-free-geolocation-data?lang=en

Regarding to the Maxmind PHP plugin:

https://github.com/maxmind/GeoIP2-php
