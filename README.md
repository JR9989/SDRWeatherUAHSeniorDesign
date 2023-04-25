# SDR Satelite Communication: Weather from Above
SDR Satelite Communication: Weather from Above, CPE 495-496 Senior Design project for the Univeristy of Alabama in Huntsville Fall 2022-Spring 2023 semesters.

The goal of this project is to make a product that allows the user to easily download radar images and text data from the GEOS-16 weather satellite.  The inteneded use case is to run this software on a Raspberry Pi 4 that will connect to a SDR with an antenna connected to download the data.  To control the device, the Raspberry Pi is running an apache web server that is connectable by the user via a wireless hotspot that it will generate.  This webserver allows the user to run the commands needed to download the data and also will dynamically allow easy viewing of the data downloaded.

## Installation
The easiest way to install this is by using the pre-imaged Raspberry Pi img that is available in the os_image directory.  Note: You must flash it to a storage device with 4GBs or greater of storage.  Larger devices are more generally recommended.  You can flash the img onto a storage device using many different tools such as balenaEtcher https://www.balena.io/etcher

## Setup
To setup this product on your own, you will need to download the following depedencies.
- GOES Tools: https://github.com/pietern/goestools
- ShellInABox: https://github.com/shellinabox/shellinabox
- Apache: https://www.apache.org
- Raspberry Pi OS: https://www.raspberrypi.com/software/
ShellInABox must be configured to your instance settings if you run this on your own computer in the website files.  In this instance, it was programed to the ip address of 192.168.42.1:4200.  This tool is used in all pages with a terminal output.

The Raspberry Pi will then be able to broadcast a server when configured properly using the files provided in the website folder.

## Using it
The webserver contains a manual page that will help the users use the software.  The default SSID is SatelliteSDR with a passphrase of Satellite!.  The default username and password for the os image is jr with a password of Rasp1234!.

## Antenna and SDR
The antenna used for this project is https://www.amazon.com/dp/B08NLDTDM7/.  The SDR that was used was https://www.nooelec.com/store/sdr/sdr-receivers/nesdr-smart-xtr-sdr.html

## Goes Tool Configuration
The configuration files for the Goes Tools can be found in the goestoolconfig directory.
## Current Project Status
This project is in ongoing development.
