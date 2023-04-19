# SDR Satelite Communication: Weather from Above
SDR Satelite Communication: Weather from Above, CPE 495-496 Senior Design project for the Univeristy of Alabama in Huntsville Fall 2022-Spring 2023 semesters.

The goal of this project is to make a product that allows the user to easily download radar images and text data from the GEOS-16 weather satellite.  The inteneded use case is to run this software on a Raspberry Pi 4 that will connect to a SDR with an antenna connected to download the data.  To control the device, the Raspberry Pi is running an apache web server that is connectable by the user via a wireless hotspot that it will generate.  This webserver allows the user to run the commands needed to download the data and also will dynamically allow easy viewing of the data downloaded.

## Installation
The easiest way to install this is by using the pre-imaged Raspberry Pi img that is available in the os_image directory.  Note: The os image is only of the main partition itself, so you may want to flash the base Raspberry Pi OS Partition image first to get a proper install.

## Setup
To setup this product on your own, you will need to download the following depedencies.
- GEOS Tools: https://github.com/pietern/goestools
- ShellInABox: https://github.com/shellinabox/shellinabox
- Apache: https://www.apache.org
- Raspberry Pi OS: https://www.raspberrypi.com/software/

The Raspberry Pi will then be able to broadcast a server when configured properly using the files provided in the website folder.

## Using it
The webserver contains a manual page that will help the users use the software.  The default SSID is SatelliteSDR with a passphrase of Satellite!.  The default username and password for the os image is jr with a password of Rasp1234!.

## Antenna and SDR
The antenna used for this project is https://www.amazon.com/dp/B08NLDTDM7/.  The SDR that was used was https://www.nooelec.com/store/sdr/sdr-receivers/nesdr-smart-xtr-sdr.html
## Current Project Status
This project is in ongoing development.
