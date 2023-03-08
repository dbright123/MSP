# MSP (Master Slave Program)

![alt MSP Logo](https://raw.githubusercontent.com/dbright123/MSP/main/msp.png)

MSP is an open source program that allows traders to copy trades from one MetaTrader 4 platform to another. With MSP, any trade executed on the master MetaTrader 4 account will be replicated on the slave MetaTrader 4 account.

MSP is written in PHP and is designed to run on a server. The program is designed to keep track of information from the master MetaTrader 4 account and make it available to the slave MetaTrader 4 account.


## Installation

To install MSP, follow these steps:

Clone the MSP repository to your server using Git:

```bash
git clone https://github.com/dbright123/MSP.git
```
Set up the MetaTrader 4 accounts. You will need to set up the master account(s) on the app give it a unique id and the slave account(s), give it the master id, you want to duplicate trade from. 

Run the MSP source code on your server either local or production server, then the server link should be updated 

## Usage
Once MSP is installed and configured, it will automatically copy trades from the master MetaTrader 4 account to the slave MetaTrader 4 account. The program will run continuously on your server, so you don't need to do anything else.

To access the trades on the slave MetaTrader 4 account, the account must communicate with the server and pass the unique ID of the master account from which it wants to retrieve the information.

If you encounter any issues or have any questions, please create an issue in the MSP repository on GitHub. Contributions to the project are also welcome!

## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Donation

If you find MSP useful, consider making a donation to support the project. Donations can be made using BTC to the following address: 19JsP9zoVCC2Xx4V2i4NMdmUrvZHW8BEK8

Any amount is appreciated!

## Contact
If you encounter any issues or have any questions, please contact me at micheal.omage@gmail.com. Contributions to the project are also welcome!