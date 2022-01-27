#!/bin/sh
for filename in *.jpg *.png *.svg
do
	echo "Skullify $filename"
	cp skull.jpg $filename
done
