<?php
    // ZADANIE 1
    int tab1[10] = {7, 3, 1, 6, 9, 5, 4, 10, 2, 2};
    
    // zad1.1
    cout << "1.1. 5 komorka: " << tab1[4] << endl;
    tab1[6] = 12;

    // zad1.2
    int tab2[10];
    for(int i = 0; i < 10; i++) {
        tab2[i] = tab1[i];
    }

    // zad1.3
    int tab3[10];
    for(int i = 0; i < 10; i++) {
        tab3[i] = tab1[i] + tab2[i];
    }

    // zad1.4
    for(int i = 0; i < 10; i++) {
        tab2[i] = tab1[9 - i];
    }


    // ZADANIE 2
    int n2 = 5;
    int tabZ2[5];
    
    // zad2.1
    cout << "\n2.1. Podaj 5 liczb:\n";
    for(int i = 0; i < n2; i++) {
        cin >> tabZ2[i];
    }

    // zad2.2
    int minEl = tabZ2[0], maxEl = tabZ2[0];
    for(int i = 1; i < n2; i++) {
        if(tabZ2[i] < minEl) minEl = tabZ2[i];
        if(tabZ2[i] > maxEl) maxEl = tabZ2[i];
    }
    cout << "2.2. Min: " << minEl << ", Max: " << maxEl << endl;

    // zad2.3
    double suma2 = 0;
    for(int i = 0; i < n2; i++) suma2 += tabZ2[i];
    cout << "2.3. Srednia: " << suma2 / n2 << endl;

    // zad2.4
    int ile3 = 0;
    for(int i = 0; i < n2; i++) if(tabZ2[i] == 3) ile3++;
    cout << "2.4. Ilosc trojek: " << ile3 << endl;

    // zad2.5
    sort(tabZ2, tabZ2 + n2);

    // zad2.6
    double mediana = (n2 % 2 != 0) ? tabZ2[n2/2] : (tabZ2[n2/2 - 1] + tabZ2[n2/2]) / 2.0;
    cout << "2.6. Mediana: " << mediana << endl;

    // zad2.7
    cout << "2.7. 3 najmniejsze: " << tabZ2[0] << ", " << tabZ2[1] << endl;
    cout << "3 najwieksze: " << tabZ2[n2-2] << ", " << tabZ2[n2-1] << endl;

    // zad2.8
    for(int i = 0; i < n2; i++) tabZ2[i] = tabZ2[i] * tabZ2[i];

    // zad2.9
    int parz = 0, nieparz = 0;
    for(int i = 0; i < n2; i++) {
        if(tabZ2[i] % 2 == 0) parz++;
        else nieparz++;
    }
    cout << "2.9. Parzyste: " << parz << ", Nieparzyste: " << nieparz << endl;

    // zad2.10
    int podz3 = 0;
    for(int i = 0; i < n2; i++) if(tabZ2[i] % 3 == 0) podz3++;
    cout << "2.10. Podzielne przez 3: " << podz3 << endl;


    // ZADANIE 3
    char tabZ3[10];
    
    // zad3.1
    cout << "\n3.1. Podaj 10 liter:\n";
    for(int i = 0; i < 10; i++) cin >> tabZ3[i];

    // zad3.2
    string wyraz;
    cout << "3.2. Podaj 10-literowy wyraz: ";
    cin >> wyraz;
    for(int i = 0; i < 10; i++) tabZ3[i] = wyraz[i];

    // zad3.3
    for(int i = 0; i < 10; i++) {
        if(tabZ3[i] >= 'a' && tabZ3[i] <= 'z') tabZ3[i] -= 32;
        else if(tabZ3[i] >= 'A' && tabZ3[i] <= 'Z') tabZ3[i] += 32;
    }

    // zad3.4
    cout << "3.4. Losowa kolejnosc: ";
    for(int i = 0; i < 10; i++) {
        int r = rand() % 10;
        cout << tabZ3[r] << " ";
    }
    cout << endl;


    // ZADANIE 4
    int A[100];
    for(int i = 0; i < 100; i++) A[i] = rand() % 50 + 1;

    // zad4.1
    int maxA = A[0], ileMax = 0;
    for(int i = 0; i < 100; i++) {
        if(A[i] > maxA) maxA = A[i];
    }
    for(int i = 0; i < 100; i++) {
        if(A[i] == maxA) ileMax++;
    }
    cout << "\n4.1. Max: " << maxA << ", wystapien: " << ileMax << endl;

    // zad4.2
    cout << "4.2. Nieparzyste: ";
    for(int i = 0; i < 100; i++) if(A[i] % 2 != 0) cout << A[i] << " ";
    cout << endl;

    // zad4.3
    cout << "4.3. Nieparzyste indeksy: ";
    for(int i = 1; i < 100; i += 2) cout << A[i] << " ";
    cout << endl;

    // zad4.4
    cout << "4.4. Przedzial <5, 15): ";
    for(int i = 0; i < 100; i++) {
        if(A[i] >= 5 && A[i] < 15) cout << A[i] << " ";
    }
    cout << endl;

    // zad4.5
    int a = 20, najblizszy = A[0];
    for(int i = 0; i < 100; i++) {
        if(abs(A[i] - a) < abs(najblizszy - a)) najblizszy = A[i];
    }
    cout << "4.5. Najblizszy do 20: " << najblizszy << endl;

    // zad4.6
    int minIdx = 0;
    for(int i = 1; i < 100; i++) {
        if(A[i] < A[minIdx]) minIdx = i;
    }
    cout << "4.6. Poprzednik min: " << (minIdx > 0 ? A[minIdx - 1] : -1) 
         << ", Nastepnik min: " << (minIdx < 99 ? A[minIdx + 1] : -1) << endl;

    // zad4.7
    int licznikWiekszych10 = 0;
    for(int i = 0; i < 100; i++) if(A[i] > 10) licznikWiekszych10++;
    int* tabW10 = new int[licznikWiekszych10];
    int idxW10 = 0;
    for(int i = 0; i < 100; i++) {
        if(A[i] > 10) tabW10[idxW10++] = A[i];
    }
    delete[] tabW10;

    // zad4.8, 4.9, 4.10
    int B[100];
    B[0] = A[0];
    for(int i = 1; i < 100; i++) {
        B[i] = B[i-1] + A[i];
    }

    // zad4.11
    sort(A, A + 100, greater<int>());

    // zad4.12
    cout << "4.12. Wystepujace >= 3 razy: ";
    for(int i = 0; i < 100; i++) {
        int ile = 0;
        for(int j = 0; j < 100; j++) if(A[j] == A[i]) ile++;
        if(ile >= 3) {
            bool bylo = false;
            for(int k = 0; k < i; k++) if(A[k] == A[i]) bylo = true;
            if(!bylo) cout << A[i] << " ";
        }
    }
    cout << endl;


    // ZADANIE 5
    int fib[100], pot2[100], ciag3[100], ciagGeom[100];

    // zad5.1
    fib[0] = 0; fib[1] = 1;
    for(int i = 2; i < 100; i++) fib[i] = fib[i-1] + fib[i-2];

    // zad5.2
    long long aktPotega = 1;
    for(int i = 0; i < 100; i++) {
        pot2[i] = aktPotega;
        aktPotega *= 2;
    }

    // zad5.3
    for(int i = 0; i < 100; i++) ciag3[i] = (i + 1) * 3;

    // zad5.4
    long long aktG = 2;
    for(int i = 0; i < 100; i++) {
        ciagGeom[i] = aktG;
        aktG *= 2;
    }

    return 0;
}
?>
