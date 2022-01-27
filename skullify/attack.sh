#!/bin/sh
for filename in *.jpg *.png
do
	echo "Skullify $filename"
	cp skull.jpg $filename
done
