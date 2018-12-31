#!/bin/bash

#tu jest glowny wybor-----------------------
echo "[0] - OPERACJE NA NAZWACH    |OK|"
echo "[1] - UTWORZYC PLIKI         |OK|"
echo "[2] - USUNAC ALL BEZ         |OK|"
echo "[3] - SORTOWANIE ALFABETYCNE |OK|"
echo "[4] - UKRYTE PLIKI MAC       |OK|"
echo "[*] - anuluje                |OK|"
#tu jest glowny wybor-----------------------
read glowny_wybor
case $glowny_wybor in
#case-0------------------------------------------------------------
"0")
	echo "Co zrobić z nazwami plików?"
	echo "[0] - Usunac spacje 	         |OK|"
	echo "[1] - Zmienic znak        	 |OK|"
	echo "[2] - Dodac cos                |OK|"
	echo "[3] - Ladne numerowanie        |OK|"
	echo "[4] - Usunac znak              |OK|"
	read wybor_operacji_na_nazwie

#$(find . -name "*\ *" | cut -c3-${SIZE})
#case-0.0------------------------------------------------------------
	if [[ $wybor_operacji_na_nazwie == 0 ]]
	then

		for f in *\ *
			do
			mv  "$f" "$(echo $f | sed "s/ //g")"
		done
#case-0.1------------------------------------------------------------
	elif [[ $wybor_operacji_na_nazwie == 1 ]]
	then

		echo "Co chcesz zamienic"
		read co 

		echo "Na co chcesz zamienic?"
		read naco
		echo "we wszystkich plikach zamienie $co na $naco (t/n)"
		read potwierdzenie

		if [ "$potwierdzenie" == "t" ]
		then
			for f in *$co*
			do
				#ta_wstawka-----------------
				if [ "$f" == "0.BASH.sh" ]
				then
				continue
				fi
				#ta_wstawka-----------------
			mv  "$f" "$(echo $f | sed "s/$co/$naco/g")"
			done
 		fi

#case-0.2------------------------------------------------------------
	elif [[ $wybor_operacji_na_nazwie == 2 ]]
	then
		echo "[0] z przodu"
		echo "[1] z tylu"
		read dodawanie_gdzie
		echo "co dodac?"
		read co_dodac
		
		if [ "$dodawanie_gdzie" == "0" ]
		then
			for f in *
			do
				#ta_wstawka-----------------
				if [ "$f" == "0.BASH.sh" ]
				then
				continue
				fi
				#ta_wstawka-----------------

			mv "$f" "$co_dodac${f}"

		done

	elif [ "$dodawanie_gdzie" == "1" ]
	then
		for f in *
			do
				#ta_wstawka-----------------
				if [ "$f" == "0.BASH.sh" ]
				then
				continue
				fi
				#ta_wstawka-----------------

				mv "$f" "${f}$co_dodac"
			done
		fi
#case-0.3------------------------------------------------------------
	elif [[ $wybor_operacji_na_nazwie == 3 ]]
	then
	 echo "podaj parametr np. txt"
	read parametr
	ilosc_plikow_w_folderze=$(ls | wc -l)
	let a=0
	if [ "$ilosc_plikow_w_folderze" -le "11" ]
	then
		for f in *
		do
				#ta_wstawka-----------------
				if [ "$f" == "0.BASH.sh" ]
				then
				continue
				fi
				#ta_wstawka-----------------

		mv "$f" "$a.$parametr"
		let a=a+1
		done
		fi

		#-----------------------------------------
		if [ "$ilosc_plikow_w_folderze" -le "99" ] && [ "$ilosc_plikow_w_folderze" -gt "11" ]
		then

			for f in *
			do
					#ta_wstawka-----------------
					if [ "$f" == "0.BASH.sh" ]
					then
					continue
					fi
					#ta_wstawka-----------------
				
				if [[ $a -le 9 ]]
				then
					mv "$f" "0$a.$parametr" 
					let a=a+1
					continue
				fi
				mv "$f" "$a.$parametr"
					let a=a+1	
			done
		fi	
#case-0.4------------------------------------------------------------
	elif [[ $wybor_operacji_na_nazwie == 4 ]]
	then
	echo "Jaki znak usunac?"
	read znak_do_usuniecia
		for f in *$znak_do_usuniecia*
		do
			#ta_wstawka-----------------
			if [ "$f" == "0.BASH.sh" ]
			then
			continue
			fi
			#ta_wstawka-----------------

		newname="$(echo "$f" | tr -d "$znak_do_usuniecia" )"
		mv "$f" "$newname"
	done

		
	elif [[ $wybor_operacji_na_nazwie == 5 ]]
	then
	echo "Co zostawic w nazwach we wsyatkich plikach?"
	echo "[0] - przód"
	echo "[1] - środek"
	read wybor_skracanie

	#-------------------------------
	if [[ $wybor_skracanie -eq 0 ]]
	then
		echo "(0,x>"
		echo "podaj x"
		read skracanie_1
			for f in *	
			do
				#ta_wstawka-----------------
				if [ "$f" == "0.BASH.sh" ]
				then
				continue
				fi
				#ta_wstawka-----------------
			nowa_nazwa="$(echo "$f " | cut -c1-"$skracanie_1" )"
		mv "$f" "$nowa_nazwa"		
		done
	#-------------------------------
	elif [[ $wybor_skracanie -eq 1 ]]
	then
		echo "Od czego..."
		read skracanie_co_1
		echo "....do czego"
		read skracanie_co_2
			for f in *	
			do
					if [ "$f" == "0.BASH.sh" ]
					then
					continue
					fi
			nowa_nazwa="$(echo "$f " | cut -c"$skracanie_co_1"-"$skracanie_co_2" )"
			mv "$f" "$nowa_nazwa"		
		done
	#-------------------------------
	fi
	
fi
;;
#case-0------------------------------------------------------------

#case-1------------------------------------------------------------)
"1")
		echo "ile (0,99)"
		read ilosc
		echo "[0] - dodac pliki TU "
		echo "[1] - dodac pliki TAM"
		read wybor_3
		#[0]----------------------------------
			if [ "$ilosc" -le "9" ] && [ "$wybor_3" -eq "0" ]
			then
				for ((c=0;c<=$ilosc;c++))
				do
				touch $c
				done
			fi
			#---------------------------
			if [ "$ilosc" -lt  "100" ]  && [ "$wybor_3" -gt "9" ]
			then
				for ((c=0;c<=$ilosc;c++))
				do

					if [ "$c" -lt 10 ]
					then
						touch 0$c
						continue
					fi

					touch $c
				done
			fi
	#---------------------------------		
	if [ "$wybor_3" -eq "1" ]
		then

		echo "jakiego?"
		read jaki
		mkdir $jaki

			if [ "$ilosc" -le "9" ]
			then
				for ((c=0;c<=$ilosc;c++))
				do
				touch $c 
				mv $c $jaki
				continue 
				done

				touch $c 
				mv $c $jaki
			fi
			#---------------------------
			if [ "$wybor_3" -lt  "100" ] && [ "$ilosc" -ge "10" ]   
			then
				for ((c=0;c<=$ilosc;c++))
				do
					if [ "$c" -lt "10" ]
					then
						touch 0$c
						mv "0$c" $jaki
						continue
					fi

					touch $c
					mv $c $jaki
				done
			fi
	fi
		;;
#case-1------------------------------------------------------------

#case-2------------------------------------------------------------
"2")
	echo "bez?"
	echo "[0] - usuwa wszystko poza 0.BASH.sh"
	echo "[1] - usuwa wszystko poza 0.BASH.sh + 1"
	echo "[2] - usuwa wszystko poza 0.BASH.sh + 2"
	echo "[3] - usuwa wszystko poza 0.BASH.sh + 3"
	read wybor_usuwwanie
	if [[ $wybor_usuwwanie == 0 ]]
	then	
	find . ! -name 0.BASH.sh -delete

	elif [[ $wybor_usuwwanie == 1 ]]
	then
	echo "jaki inny plik zostawic?"
	read inny_1
	find . ! -name 0.BASH.sh ! -name "$inny_1" -delete
	
	elif [[ $wybor_usuwwanie == 2 ]]
	then
	echo "jaki inny plik zostawic?"
	read inny_1
	echo "jaki inny plik zostawic?"
	read inny_2

	find . ! -name 0.BASH.sh ! -name "$inny_1" ! -name "$inny_2" -delete

	elif [[ $wybor_usuwwanie == 3 ]]
	then
	echo "jaki inny plik zostawic?"
	read inny_1
	echo "jaki inny plik zostawic?"
	read inny_2
	echo "jaki inny plik zostawic?"
	read inny_3
	find . ! -name 0.BASH.sh ! -name "$inny_1" ! -name "$inny_2" ! -name "$inny_3" -delete

	echo "1"
	fi
;;
#case-2------------------------------------------------------------

#case-3------------------------------------------------------------
	"3")
	echo "1/2 krok: Ktory rodzaj sortowania?"
	echo "[0] - sortowanie alfaetyczne"
	echo "[1] - sortowanie odwrotne do alfaetycznego"
	read wybor_rodzaju_sortowania
	echo "2/2 krok ktory plik posortowac"
	read plik_do_alfabetycznego_posortowania

	if [[ $wybor_rodzaju_sortowania == 0 ]]
	then

		sort -d "$plik_do_alfabetycznego_posortowania" > temp && cp temp "$plik_do_alfabetycznego_posortowania" && rm temp 

	elif [[ $wybor_rodzaju_sortowania == 1 ]]
	then
		sort -r "$plik_do_alfabetycznego_posortowania" > temp && cp temp "$plik_do_alfabetycznego_posortowania" && rm temp 
	fi
	;;
#case-3------------------------------------------------------------
#case-4------------------------------------------------------------
	"4")
echo "[0] - pokaz "
echo "[1] - ukryj "
read wybor_pokaz

		if [[ $wybor_pokaz == 0 ]]
		then
			defaults write com.apple.finder AppleShowAllFiles YES
			killall Finder
			killall Terminal
		elif  [[ $wybor_pokaz == 1 ]] 
		then
			defaults write com.apple.finder AppleShowAllFiles NO
			killall Finder
			killall Terminal
		fi
	;;
#case-3------------------------------------------------------------

#default-case-------------------------------------------------------------
	*)
      kill -SIGINT $$
		;;
#default-case-------------------------------------------------------------
esac
