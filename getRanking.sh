#!/bin/bash
for (( ; ; ))
do
        echo "Fetching rankings in 3..."

        sleep 1
        echo "Fetching rankings in 2..."
        sleep 1
        echo "Fetching rankings in 1..."
        sleep 1
        php index.php
        echo "Done!"
        echo "Getting next ranking dump in 1h"
        sleep 1h
done
