#!/usr/bin/env bash
######################################################
function name_operations
{
echo "add,remove, or modify  string?"
	echo "[0] ADD"
	echo "[9] REMOVE"
	echo "[8] MODIFY"
        read string_choice
#[1]-----------------------------------------------------
	if [[ $string_choice == 0 ]]
    then
        echo "what?"
            read what
        echo "where?"
            echo "[0] - to the front of the word"
            echo "[9] - to the back of the word"
        read where
    #[1.1]-----------------------------------------------------
            if [ "$where" == "0" ]
            then
                for f in *
                do
                    #safety-----------------
                    if [ "$f" == "0.BASH.sh" ] || [ "$f" == "LIB.sh" ]
                    then
                    continue
                    fi
                    #safety-----------------
                mv "$f" "$what${f}"
                done
            #[1.2]-----------------------------------------------------
            elif [ "$where" == "9" ]
            then
                for f in *
                do
                        #safety-----------------
                        if [ "$f" == "0.BASH.sh" ] || [ "$f" == "LIB.sh" ]
                        then
                        continue
                        fi
                        #safety-----------------
                        mv "$f" "${f}$what"
                done
            fi
    #[2]-----------------------------------------------------
    elif [[ $string_choice == 9 ]]
    then
        echo "Remove string or a number of characters?"
            echo "[0] - number"
            echo "[9] - string"
                read removing_choice
        #[2.1]-----------------------------------------------------
        if [[ $removing_choice == 0 ]]
        then
			echo "enter a number of characters to remove from the front "
			read number_to_remove
            for f in *
            do
                    #safety-----------------
                    if [ "$f" == "0.BASH.sh" ] || [ "$f" == "LIB.sh" ]
                    then
                    continue
                    fi
                    #safety----------------
            mv "$f" "$(echo $f | cut "-c"$number_to_remove"-")"
            done
#[2.2]-----------------------------------------------------
        elif [[ $removing_choice == 9 ]]
        then
            echo "What string to remove?"
                read string_to_remove
            for f in *
            do
                    #safety-----------------
                    if [ "$f" == "0.BASH.sh" ] || [ "$f" == "LIB.sh" ]
                    then
                    continue
                    fi
                    #safety----------------
            mv "$f" "$(echo $f | sed "s/$string_to_remove//g")"
        done
        fi
    #[3]-----------------------------------------------------
    elif [[ $string_choice == 8 ]]
    then
        echo "modify  string or increment a series of folders?"
            echo "[0] INCREMENT A SERIES OF FOLDERS"
            echo "[9] Modify strings"
            echo "[8] Rename from 1 to N"
        read modifying_choice
    #[3.1]-----------------------------------------------------
        if [[ $modifying_choice == 0 ]]
        then
            let LICZNIK=0;
            for PLIK in $(ls -1 | sort -f); do
                if [ "$PLIK" != "0.BASH.sh" ] || [ "$PLIK" != "LIB.sh" ]
                then
                    if [ $LICZNIK -lt 10 ]
                    then
                        echo 0$LICZNIK.$PLIK;
                        mv $PLIK 0$LICZNIK.$PLIK;
                        else
                        echo $LICZNIK.$PLIK;
                        mv $PLIK $LICZNIK.$PLIK;
                    fi
                let LICZNIK=LICZNIK+1;
                fi
            done
        #[3.2]-----------------------------------------------------
        elif [[ $modifying_choice == 9 ]]
        then
            echo "What string to replace?"
            read string_to_replace
            echo "With what?"
            read string_to_replace_with
            for f in *
            do
                        #safety-----------------
                        if [ "$f" == "0.BASH.sh" ] || [ "$f" == "LIB.sh" ]
                        then
                        continue
                        fi
                        #safety----------------
            mv "$f" "$(echo $f | sed "s/$string_to_replace/$string_to_replace_with/g")"
        done
        #[3.3]-----------------------------------------------------
            elif [[ $modifying_choice == 8 ]]
            then
            i=1
                    for f in *
                    do
                                #safety-----------------
                                if [ "$f" == "0.BASH.sh" ] || [ "$f" == "LIB.sh" ]
                                then
                                continue
                                fi
                                #safety----------------
                                


                        mv "$f" "$i.png"
                let i=i+1;
                    done

            fi
 #[3.3]-----------------------------------------------------
	fi
#[1]-----------------------------------------------------
}
######################################################
######################################################
function image_operations 
{
echo "what to do with the photo?"
	echo "[0] - crop"
	echo "[9] - merge"
		read image_choice
	if [[ $image_choice == 0 ]]
	then
		echo "how many pictures containing pictures?"
		read big_pictures
		echo "how many small pictures on the larger one?"
			echo "[0] - 3 pictures"
			echo "[9] - 5 pictures"
			read small_pictures

            if [[ $small_pictures == 0 ]]
            then
                for (( i=0; i<big_pictures; i++))
                do
                    convert Scan$i.jpeg -crop 1807x1195+0+0 $i.1SP.jpeg
                    convert Scan$i.jpeg -crop 1807x1195+0+1180 $i.2SP.jpeg
                    convert Scan$i.jpeg -crop 1807x1195+0+2370 $i.3.SPjpeg
                done
            elif [[ $small_pictures == 9 ]]
            then
                for (( i=0; i<big_pictures; i++))
                do
                    convert Scan$i.jpeg -crop 1491x1032+0+0 $i.1LP.jpeg
                    convert Scan$i.jpeg -crop 1050x1515+0+1035 $i.2LP.jpeg
                    convert Scan$i.jpeg -crop 1491x1032+0+2546 $i.3LP.jpeg
                    convert Scan$i.jpeg -crop 1050x1515+1526+0 $i.4LP.jpeg
                    convert Scan$i.jpeg -crop 1050x1515+1526+2096 $i.5LP.jpeg
                done
             fi
	elif [[ $image_choice == 9 ]]
		then
		echo "merge two pictures verticaly or horizontaly?"
		echo "(name them 1.jpeg and 2.jpeg)"
			echo "[9] ---  - horizontal"
			echo "[0] |||  - vertical"
	read merging_choice
	echo "how to name the result?"
	read result_name
		if [[ $merging_choice == 9 ]]
		then
			convert 1.jpeg 2.jpeg +append $result_name.jpeg;
			open $result_name.jpeg
		elif [[ $merging_choice == 0 ]]
		then
		convert 1.jpeg 2.jpeg -append  $result_name.jpeg;
			open $result_name.jpeg
		fi
	fi

}
######################################################

######################################################
function mac_operations
{
echo "what mac operation would you like to do?"
	echo "[0] Make the dock hide delay 0"
	echo "[9] Show hidden files"
read mac_choice
if [[ $mac_choice == 0 ]]
then
	defaults write com.apple.dock autohide-time-modifier -int 0
	killall Dock
elif [[ $mac_choice == 9 ]]
then
	echo "[0] - show "
	echo "[9] - hide "
	read view_choice

	if [[ $view_choice == 0 ]]
	then
		defaults write com.apple.finder AppleShowAllFiles YES
		killall Finder
		killall Terminal
	elif  [[ $view_choice == 9 ]] 
	then
		defaults write com.apple.finder AppleShowAllFiles NO
		killall Finder
		killall Terminal
		fi
fi
}
######################################################
######################################################
function self_destruct
{
	rm 0.BASH.sh
	rm LIB.sh
}
######################################################
######################################################
function run_again
{
	./$0
}
######################################################

######################################################
function cropp
{
	echo "modify number of small pictures ?[Y/N]]"
		read sp_choice
		small_pictures=0
				if [ "$sp_choice" == "N" ]
				then
					 small_pictures=5
				elif [ "$sp_choice" == "Y" ]
				then
				
				echo $small_pictures
				echo "bye"
				fi
				
}
######################################################
######################################################

function make_f_n_f
{
	 
		echo "what?"
		echo "files[0]"
		echo "folders[9]"
		read making_choice
		if [[ $making_choice == 0 ]]
			then
echo "how many?"
read count
echo "what extension?"
read extension

	for ((c=0; c<=$count; c++))
	do	

		if [ "$c" -le 9 ]
		then
		touch 0$c.$extension
		continue
		fi


	touch $c.$extension

	done
		elif [[ $making_choice == 9 ]]
			then
echo "how many?"
read count

	for ((c=0; c<=$count; c++))
	do	

		if [ "$c" -le 9 ]
		then
		touch 0$c
		continue
		fi


	touch $c

	done
		fi

}
######################################################
######################################################



function move_files	
{
	
	echo "move all to front or to the back?"
	echo "[0] - front "
	echo "[1] - back"
	echo "[2] - wejsc do kazdego katalogu i wyjac wszystko"
	echo "[3] - jeden plik skopiowac i wsadzic do kazdego katalogu"

	read moving_choice
	if [[ $moving_choice == 0 ]]
	then

	echo "to what folder?"
	read to_what_folder
	echo "which files?"
	read which_files

	echo $to_what_folder | xargs -n 1 mv $which_files
	
	elif [[ $moving_choice == 2  ]]
	then
	find . -type f ! -name 0.BASH.sh -exec mv {} ./ \;
	
	fi
}
