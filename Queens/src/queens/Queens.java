/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package queens;

import java.util.Scanner;

/*
 * The Queens class.
 * Places a number of chess queens on a board of a
 * specified size so that no queen can attack another.
 */
public class Queens {

    protected int boardSize;
    protected boolean[][] board;

    public Queens(int boardSize) {
        this.boardSize = boardSize;
        board = new boolean[boardSize][boardSize];

        for (int row = 0; row < boardSize; row++) {
            for (int column = 0; column < boardSize; column++) {
                board[row][column] = false;
            }
        }
    } // Queens constructor

    /*
     * pre: There are queens in columns 0 to (column - 1).
     * post: Queens have been placed in all the columns
     *       of board and PlaceQueens will return true, or
     *       PlaceQueens will return false.
     */
    protected boolean placeQueen(int column) {
        int row;

        if (column == boardSize) {
            return true;
        } else {
            boolean successful = false;
            row = 0;
            while ((row < boardSize) && !successful) {
                if (threat(row, column)) {
                    row++;
                } else {
                    // Place queen and try to place queen in next column.
                    board[row][column] = true;
                    successful = placeQueen(column + 1);

                    if (!successful) {
                        // Remove the queen placed in the column.
                        board[row][column] = false;
                        row++;
                    }
                }
            }

            return successful;
        }
    } // placeQueen method

    protected boolean threat(int row, int column) {
        // Test for a queen on the same row.
        for (int c = 0; c < column; c++) {
            if (board[row][c]) {
                return true;
            }
        }

        // Test for queen on up diagonal.
        for (int c = 1; c <= column; c++) {
            if (row < c) {
                break;
            }

            if (board[row - c][column - c]) {
                return true;
            }
        }

        // Test for queen on down diagonal
        for (int c = 1; c <= column; c++) {
            if (row + c >= boardSize) {
                break;
            }

            if (board[row + c][column - c]) {
                return true;
            }
        }

        return false;
    } // threat method

    protected void outputBoard() {
        System.out.println("Solution for board of size " + boardSize + ":");

        for (int row = 0; row < boardSize; row++) {
            for (int column = 0; column < boardSize; column++) {
                if (board[row][column]) {
                    System.out.print("Q ");
                } else {
                    System.out.print(". ");
                }
            }

            System.out.println();
        }

        System.out.println();
    } // outputBoard method

    public void solve() {
        if (placeQueen(0)) {
            outputBoard();
        } else {
            System.out.println("There is no solution possible");
        }
    } // solve method

    public static void main(String[] args) {
        Queens board;

        Scanner input = new Scanner(System.in);
        System.out.print("Enter the board Size: "); //Gain Size of board from user
        int boardSize = input.nextInt();
        input.close();

        board = new Queens(boardSize);
        board.solve();
    } // main method
} /*Queens class*/
