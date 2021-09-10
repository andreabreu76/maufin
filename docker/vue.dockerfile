FROM node:latest

RUN apt update && apt -y upgrade
RUN apt -y install build-essential 

#RUN yarn install

EXPOSE 3000