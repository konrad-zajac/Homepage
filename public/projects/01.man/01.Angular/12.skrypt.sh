#!/bin/bash

let LICZNIK=0;
for PLIK in $(ls -1 | sort -f); do
    if [ "$PLIK" != "$0" ]; then
		if [ $LICZNIK -lt 10 ]; then
        	echo 0$LICZNIK.$PLIK;
			mv $PLIK 0$LICZNIK.$PLIK;
		else
        	echo $LICZNIK.$PLIK;
			mv $PLIK $LICZNIK.$PLIK;
		fi
    	let LICZNIK=LICZNIK+1;
	fi
done

