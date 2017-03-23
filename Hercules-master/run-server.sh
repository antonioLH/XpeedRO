#!/bin/bash
screen ./login-server.sh
sleep 1
screen ./char-server.sh
sleep 1
screen ./map-server.sh
sleep 1

