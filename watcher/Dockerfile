from ubuntu

RUN apt-get update && apt-get install -y apt-utils
RUN apt update && apt install -y 
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends tzdata 

//Veuillez laisser l'entrée chromium-browser nous récupérons des lignes utiles pour la suite
RUN apt-get update && apt-get install -y xvfb gcc xdg-utils python3 python3-pip nano wget vim  chromium-browser


RUN apt-get update && apt-get install -y libraspberrypi0 libraspberrypi-dev libraspberrypi-bin
RUN apt-get update && apt-get install -y libgtk2.0-0 libsm6 libnss3 libnss3-dev
RUN apt-get update && apt-get install -y libatk-bridge* libxcb-image* libgbm* libasound*
RUN apt-get update && apt-get install -y libgtk-3* 

                    
RUN wget https://archive.raspberrypi.org/debian/pool/main/c/chromium-browser/chromium-codecs-ffmpeg_88.0.4324.187-rpt1_armhf.deb
RUN dpkg -i chromium-codecs-ffmpeg_88.0.4324.187-rpt1_armhf.deb     
RUN wget https://archive.raspberrypi.org/debian/pool/main/c/chromium-browser/chromium-codecs-ffmpeg-extra_88.0.4324.187-rpt1_armhf.deb
RUN dpkg -i chromium-codecs-ffmpeg-extra_88.0.4324.187-rpt1_armhf.deb              
RUN wget https://archive.raspberrypi.org/debian/pool/main/c/chromium-browser/chromium-browser_88.0.4324.187-rpt1_armhf.deb
RUN dpkg -i chromium-browser_88.0.4324.187-rpt1_armhf.deb
RUN wget https://archive.raspberrypi.org/debian/pool/main/c/chromium-browser/chromium-chromedriver_88.0.4324.187-rpt1_armhf.deb
RUN dpkg -i chromium-chromedriver_88.0.4324.187-rpt1_armhf.deb
RUN wget https://archive.raspberrypi.org/debian/pool/main/c/chromium-browser/chromium-browser-l10n_88.0.4324.187-rpt1_all.deb
RUN dpkg -i chromium-browser-l10n_88.0.4324.187-rpt1_all.deb
RUN wget https://archive.raspberrypi.org/debian/pool/main/w/widevine/libwidevinecdm0_4.10.1679.0-1_armhf.deb
RUN dpkg -i libwidevinecdm0_4.10.1679.0-1_armhf.deb


COPY ./requirements.txt /tmp
RUN pip3 install -r /tmp/requirements.txt
#RUN wget --load-cookies /tmp/cookies.txt "https://docs.google.com/uc?export=download&confirm=$(wget --quiet --save-cookies /tmp/cookies.txt --keep-session-cookies --no-check-certificate 'https://docs.google.com/uc?export=download&id=1darcYgT6CdNwi4IrMAdIYz3y87ZTtRaT' -O- | sed -rn 's/.*confirm=([0-9A-Za-z_]+).*/\1\n/p')&id=1darcYgT6CdNwi4IrMAdIYz3y87ZTtRaT" -O chromium-browser.tar.gz && rm -rf /tmp/cookies.txt
#RUN tar --same-owner -xvf chromium-browser.tar.gz
#RUN mv ./chromium-browser/ ./lib/chromium-browser/

RUN mkdir -p ./opt/robots
COPY ./robot.py ./opt/robots/robot.py
#COPY ./WidevineCdm /.opt/WidevineCdm
#COPY ./bin/chromedriver ./bin/chromedriver
#COPY ./bin/chromium-browser/ ./bin/chromium-browser
#COPY ./chromium-browser/ ./lib/chromium-browser/
WORKDIR ./opt/robots
CMD ["python3", "./robot.py"]

