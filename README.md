# musclefoods-vending-machine
Vending Machine Kata

Technical test

Vending Machine
- accepts money
- makes change
- maintain inventory
- dispense products
- HAS A DISPLAY




Features
- accepts coins
    - coins are to be identified by their weight and size
        - value to be added to what was inserted
            - This can be simulated using strings, constants, enums, symbols, or something of that nature.
    - only valid coins are accepted (currently nickels, dimes and quarters)
        - when added, the amount in the display will be updated
    - invalid coins are rejected
        - rejected coins are placed in the coin return
- when no coins are inserted the machine display INSERT COIN


Vendor
- customers to select product
    - currently three products
        - cola ($1)
        - chips ($0.5)
        - candy ($0.65)
- when button is pressed and money has been inserted
    - product dispensed, display updated: THANK YOU then to say INSERT COIN, current amount set to £0.00 <-- visual representation
- when button is pressed and not enough money has been inserted
    - machine displays PRICE and display will display either 
        - INSERT COIN or 
        - the CURRENT AMOUNT as appropriate  <-- need to clarify conditions for this

- customers to received correct change
    - when a product is selected that is less than the amount of money in the machine, remaining amount is placed in coin return
    

Customer
- wants money returned
    - return coin button can be pressed
        - when pressed, display shows INSERT COIN
- wants to be informed when item is not available
    - when selected item is out of stock, machine displays SOLD OUT, 
    then it will display the amount of money remaining in the machine or INSERT COIN if no money is remaining
- wants to know when exact change is required
    - when machine is not able to make change with the money in the machine, then it will display EXACT CHANGE ONLY instead of INSERT COIN 



INPUTS
- coins

DISPLAY
- EXACT CHANGE ONLY
- INSERT COIN
- SOLD OUT
- THANK YOU
