#!/usr/bin/env bash

# Stop server
echo "Stopping and removing docker containers and network..."
docker-compose -f tools/docker-compose.yml down