# Tracking System & Location History

For making this sytem i will make 2 application, web application and mobile application. If application must developed using javascript then i will using react native for mobile application and vue.js for web application.


## Concept

1.Web application will store all information like car information, car owner, customer, transcation and location.<br/>
2.Mobile application will send car position.<br/>
3.Each car will have a smartphone that has an application installed.


## Transaction Flow

1.Customer come to office, select car and make a payment.<br/>
2.Admin store transaction on website.<br/>
3.Transaction data saved on database and push notification.<br/>
4.Mobile application will subscribe notification and open transaction. When transaction open, application will send car position in every minutes.<br/>
5.Admin can see car position history on website.<br/>
6.After the customer has finished using the car, admin close transaction on website and send notification to mobile app.<br/>
7.After transaction closed, mobile application will stop send car position.


## Technology

1.React Native for Mobile Application<br/>
2.Vue for Website Frontend<br/>
3.Laravel for Website Backend<br/>
4.Lumen for REST API<br/>
5.Firebase / Socket.io for Pubsub<br/>
6.Google Map SDK
