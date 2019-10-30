FROM node:12.13-alpine

ENV APP_ROOT /home/node/app/

WORKDIR $APP_ROOT

COPY yarn.lock .

RUN apk update && \
    yarn global add @vue/cli && \
    yarn install

