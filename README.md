# 	ukfIG2_BackEnd_ZaverecnaPraca
## 	Ako používať GIT

### 	Prve stiahnutie programu
V procese výskumu

## 	Pracovanie na projekte
### 	01.Ako prvé si overím, či nedošlo k zmenám v projekte.
#### 		01.Pozrem si, či sa zmenilo niečo v projekte
``` console
git fetch
```
#### 		02.V prípade zmeny stiahnem zmeny
``` console
git pull
```

###	02. Idem robiť zmeny v projekte
####		01.Vytvorím si lokálne u seba nový branch
```console
git branch <názov tvojej branče bez <> >
```
####		02.Prepnem sa do tej branče
```console
git switch <názov tvojej branče bez<> >
```
####		03.Vykonám zmeny v projekte
####		04.Po vykonaní zmien chceme zoznam súborov, ktoré sme upravovali
Záleži podľa OS a softwaru ktorý používaš sa edit projektu.
Cez terminál to je vo všeobecnosti príkaz "git add"
``` console
git add <nazvy súborov, ktoré si menil/a bez <> >
```
####		05.Potom tie zmeny chceme zapísať, urobiť o tom záznam
``` console
git commit -m "<Tvoj komentár. V skratke aké zmenym úlohu si robil bez <> >"
```
Máme lokálne urobené zmeny projektu, ktoré chceme odovzdať do projektu. Záleži podľa softwáru, ktorý sa bude používať ako ďalej.
####		06.Vo všeobecnosti push-neme nami vytvorenú branču do projektu
``` console
git push
```
		Podľa softvéru môže vyžadovať dodatočný krok k push-nutiu.
####		07.Prejdeš na github
```
https://github.com/ukfIG2/ukfIG2_BackEnd_ZaverecnaPraca
```
		Na lište hore pôjdeš do _"Pull request"_ 

