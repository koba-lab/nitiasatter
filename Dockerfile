FROM node:12.13-alpine

ENV APP_ROOT /home/node/app/

WORKDIR $APP_ROOT

COPY package.json .
COPY yarn.lock .

RUN yarn install && yarn global add @vue/cli
