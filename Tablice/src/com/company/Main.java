package com.company;

public class Main {

    public static void main(String[] args) {

        int[] tablica = new int[10];

        for (int i = 0; i < tablica.length;i++) {
            tablica[i] = (int)(10 * Math.random());
            System.out.print(tablica[i] + " ");
        }

	// write your code here
    }
}
