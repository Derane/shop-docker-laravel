FROM node:16 AS builder

WORKDIR /app

COPY . .

RUN npm install
RUN npm run build
