<!-- index.php -->
<!-- Author: J.R. Stooksbury, Date: 2/26/23 -->
<!-- Main landing page for web server -->
<?php $title="User Manual"; $header="User Manual"; include 'php/header.php'; ?>
  <div class="homeDiv">
    <p class="notice">
      <br><br>Click on the links above to perform the various functions of the SDR.  Command can be inputted on the download data page. <br><br>Commands to run ghost tools<br><br>goesrecv -v -i 1 -c goesrecv.conf<br>Downloads data<br><br>SSH Username: jr  Password: Rasp1234!<br<br>Software installation guide
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
<br><br>
Installing goestools<br>
<br><br>
git clone https://github.com/pietern/goestools.git<br>
<br><br>
      * If you plan to use hackrf sdr run this command instead
git clone https://github.com/nqbit/goestools.git
<br><br>
cd goestools<br>
git submodule init<br>
git submodule update  --recursive<br>
mkdir build<br>
cd build<br>
cmake -DCMAKE_INSTALL_PREFIX:PATH=/usr ..<br>
sudo make -j2 install <br>
<br><br>
* You should have now successfully installed goestools
</p>
  </div>
<?php include 'php/footer.php' ?>