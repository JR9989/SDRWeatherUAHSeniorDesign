<!-- index.php -->
<!-- Author: J.R. Stooksbury, Date: 2/26/23 -->
<!-- Main landing page for web server -->
<?php $title="User Manual"; $header="User Manual"; include 'php/header.php'; ?>
  <div class="homeDiv">
    <p class="notice">
      <br><br>Click on the links above to perform the various functions of the SDR.  Command can be inputted on the download data page. <br><br>Home - This is a simple home page that doesn't contain anytools or data<br>Download Data - This page contains an embedded terminal that allows you to enter the commands necessary to download the satellite data<br>Determine Azimuth - This page contains a tool that helps the user determine the correct satellite azimuth which is the direction needed to point the antenna<br>Generated Images - This page contains all of the images downloaded from the satellite<br>Generated Text - This page contains all of the text files downloaded from the satellite<br>User Manual - The page you are own right now that explains things<br><br>Command to run ghost tools to download data (both must be ran at the same time)<br><br>./receive.sh OR goesrecv -v -i 1 -c goesrecv.conf<br><br>./process.sh OR goesproc -c goesproc.conf -m packet --subscribe tcp://127.0.0.1:5004<br><br>SSH Username: jr  Password: Rasp1234!<br><br>Wifi Network SSID: SatelliteSDR<br>Password: Satellite!<br><br><br>Ghost tools software installation guide
<br><br>
Add dependencies to be able to install goestools from github
<br><br>
Sudo apt-get install git build-essential cmake libusb-1.0 libopencv-dev libproj-dev
<br><br>
Hackrf dependency command 
<br><br>
Sudo apt-get install -y libhackrf-dev
<br><br>
Install librtlsdr
<br><br>
git clone https://github.com/steve-m/librtlsdr.git<br>
cd librtlsdr<br>
mkdir build<br>
cd build<br>
cmake -DCMAKE_INSTALL_PREFIX:PATH=/usr -DINSTALL_UDEV_RULES=ON ..<br>
sudo make -j2 install<br>
<br><br>
sudo cp ../rtl-sdr.rules /etc/udev/rules.d/<br>
sudo ldconfig<br>
echo ‘blacklist dvb_usb_rtl28xxu’ | sudo tee –append /etc/modprobe.d/<br>blacklist-dvb_usb_rtl28xxu.conf<br>
sudo reboot<br>
<br>
Installing goestools<br>
<br>
git clone https://github.com/pietern/goestools.git<br>
Use this command instead for the hackrf: git clone https://github.com/nqbit/goestools.git
<br><br>
cd goestools<br>
git submodule init<br>
git submodule update  --recursive<br>
mkdir build<br>
cd build<br>
cmake -DCMAKE_INSTALL_PREFIX:PATH=/usr ..<br>
sudo make -j2 install <br>
</p>
  </div>
<?php include 'php/footer.php' ?>