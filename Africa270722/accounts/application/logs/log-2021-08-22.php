<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-22 15:14:49 --> $config['composer_autoload'] is set to TRUE but /home/xeninipq/money.geefto.com/accounts/application/vendor/autoload.php was not found.
ERROR - 2021-08-22 15:14:49 --> Severity: error --> Exception: Call to a member function get_table_records_crud() on null /home/xeninipq/money.geefto.com/accounts/application/controllers/admin/Payment.php 342
ERROR - 2021-08-22 15:16:51 --> Could not find the specified $config['composer_autoload'] path: /home/xeninipq/money.geefto.com/accounts/vendor/autoload.php
ERROR - 2021-08-22 15:16:51 --> Severity: error --> Exception: Call to a member function get_table_records_crud() on null /home/xeninipq/money.geefto.com/accounts/application/controllers/admin/Payment.php 342
ERROR - 2021-08-22 15:17:06 --> Could not find the specified $config['composer_autoload'] path: /home/xeninipq/money.geefto.com/accounts/vendor/autoload.php
ERROR - 2021-08-22 15:17:06 --> Severity: error --> Exception: Call to undefined function is_null_or_empty_string() /home/xeninipq/money.geefto.com/accounts/application/models/Common_model.php 1466
ERROR - 2021-08-22 15:20:35 --> Could not find the specified $config['composer_autoload'] path: /home/xeninipq/money.geefto.com/accounts/vendor/autoload.php
ERROR - 2021-08-22 15:20:35 --> Controller: payment Controller Method: stripe_payment Error: {"status":"error","code":400,"message":"Bad Request. Incomplete Data","data":[]}
ERROR - 2021-08-22 15:24:14 --> Controller: payment Controller Method: stripe_payment Error: {"status":"error","code":400,"message":"Bad Request. Incomplete Data","data":[]}
ERROR - 2021-08-22 15:25:35 --> Severity: error --> Exception: Call to a member function insert_record() on null /home/xeninipq/money.geefto.com/accounts/application/controllers/admin/Payment.php 382
ERROR - 2021-08-22 15:27:10 --> No API key provided.  (HINT: set your API key using "Stripe::setApiKey(<API-KEY>)".  You can generate API keys from the Stripe web interface.  See https://stripe.com/api for details, or email support@stripe.com if you have any questions.
ERROR - 2021-08-22 15:27:10 --> 
ERROR - 2021-08-22 15:27:10 --> Controller: payment Controller Method: stripe_payment Error: {"status":"error","code":404,"message":"Something went wrong while initiating Transaction.","data":{"session_response":false}}
ERROR - 2021-08-22 15:28:26 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:28:26 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:28:31 --> Could not find the language line "month"
ERROR - 2021-08-22 15:28:31 --> Could not find the language line "year"
ERROR - 2021-08-22 15:28:31 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:28:31 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:28:32 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:28:32 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:28:32 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:28:38 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:28:38 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:28:38 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:28:40 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:28:40 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:28:40 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:28:42 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:28:42 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:28:42 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:28:42 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:28:42 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:28:42 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:28:43 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:28:43 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:28:43 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:28:44 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:28:44 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:28:44 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:28:44 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:28:44 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:28:44 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:28:47 --> Stripe\Checkout\Session JSON: {
    "id": "cs_test_a1Rdu3Hj9uznHml7q9AyOOvUzYLisPZZ1foaygGgP6KwAcryItf2nDb6Xk",
    "object": "checkout.session",
    "allow_promotion_codes": null,
    "amount_subtotal": 50000,
    "amount_total": 50000,
    "automatic_tax": {
        "enabled": false,
        "status": null
    },
    "billing_address_collection": null,
    "cancel_url": "https:\/\/money.geefto.com\/accounts\/payment\/stripe_failure",
    "client_reference_id": "ewallet_b43aed61d43f74d82b022422cfa26e22",
    "currency": "usd",
    "customer": null,
    "customer_details": null,
    "customer_email": null,
    "livemode": false,
    "locale": null,
    "metadata": {
        "user_id": "6",
        "transaction_id": "1781629660525894"
    },
    "mode": "payment",
    "payment_intent": "pi_1JRMLbFjgYMbRuS3o5d3CJ7A",
    "payment_method_options": [],
    "payment_method_types": [
        "card"
    ],
    "payment_status": "unpaid",
    "setup_intent": null,
    "shipping": null,
    "shipping_address_collection": null,
    "submit_type": "pay",
    "subscription": null,
    "success_url": "https:\/\/money.geefto.com\/accounts\/payment\/stripe_success?session_id={CHECKOUT_SESSION_ID}",
    "total_details": {
        "amount_discount": 0,
        "amount_shipping": 0,
        "amount_tax": 0
    },
    "url": "https:\/\/checkout.stripe.com\/pay\/cs_test_a1Rdu3Hj9uznHml7q9AyOOvUzYLisPZZ1foaygGgP6KwAcryItf2nDb6Xk#fidkdWxOYHwnPyd1blpxYHZxWjA0TUxBZkhDb2JcSGdXcFY2VFZiNEF8Z0lwZ08zbUdudDBBNXdqd0didXR%2FRzVgRDRKS3Q3U3IxVEBPSTdmUkt0fzR2UFVSQTVJfUhMRm03fTRBMXJMUVZNNTV%2FPGdGdWhVcicpJ2N3amhWYHdzYHcnP3F3cGApJ2lkfGpwcVF8dWAnPyd2bGtiaWBabHFgaCcpJ2BrZGdpYFVpZGZgbWppYWB3dic%2FcXdwYHgl"
}
ERROR - 2021-08-22 15:33:27 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:33:27 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:33:34 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:33:34 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:33:48 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:33:48 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:33:48 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:33:55 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:33:55 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:34:21 --> Could not find the language line "month"
ERROR - 2021-08-22 15:34:21 --> Could not find the language line "year"
ERROR - 2021-08-22 15:34:21 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:34:21 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:34:22 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:34:22 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:34:22 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:35:07 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:35:07 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:35:07 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:35:08 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:35:08 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:35:08 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:35:09 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:35:09 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:35:09 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:39:00 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:39:00 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:39:22 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:39:22 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:39:23 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:39:23 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:39:23 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:39:34 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:39:34 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:39:34 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:39:34 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:39:34 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:40:36 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:40:36 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:40:37 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:40:37 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:40:37 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:40:58 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:40:58 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:40:58 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:41:04 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:41:04 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:41:04 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:41:06 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:41:06 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:41:06 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:41:08 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:41:08 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:41:08 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:44:03 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:44:03 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:44:04 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:44:04 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:44:04 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:44:16 --> Stripe\Checkout\Session JSON: {
    "id": "cs_test_a1qhKQu3WAd2INjNmhXoTCfUhOMOiCSVKlqPQz30YIggUOu78IA5RdckCf",
    "object": "checkout.session",
    "allow_promotion_codes": null,
    "amount_subtotal": 50000,
    "amount_total": 50000,
    "automatic_tax": {
        "enabled": false,
        "status": null
    },
    "billing_address_collection": null,
    "cancel_url": "https:\/\/money.geefto.com\/accounts\/payment\/stripe_failure",
    "client_reference_id": "ewallet_b43aed61d43f74d82b022422cfa26e22",
    "currency": "usd",
    "customer": null,
    "customer_details": null,
    "customer_email": null,
    "livemode": false,
    "locale": null,
    "metadata": {
        "user_id": "6",
        "transaction_id": "3841629661455426"
    },
    "mode": "payment",
    "payment_intent": "pi_1JRMaaFjgYMbRuS3l52XteZl",
    "payment_method_options": [],
    "payment_method_types": [
        "card"
    ],
    "payment_status": "unpaid",
    "setup_intent": null,
    "shipping": null,
    "shipping_address_collection": null,
    "submit_type": "pay",
    "subscription": null,
    "success_url": "https:\/\/money.geefto.com\/accounts\/payment\/stripe_success?session_id={CHECKOUT_SESSION_ID}",
    "total_details": {
        "amount_discount": 0,
        "amount_shipping": 0,
        "amount_tax": 0
    },
    "url": "https:\/\/checkout.stripe.com\/pay\/cs_test_a1qhKQu3WAd2INjNmhXoTCfUhOMOiCSVKlqPQz30YIggUOu78IA5RdckCf#fidkdWxOYHwnPyd1blpxYHZxWjA0TUxBZkhDb2JcSGdXcFY2VFZiNEF8Z0lwZ08zbUdudDBBNXdqd0didXR%2FRzVgRDRKS3Q3U3IxVEBPSTdmUkt0fzR2UFVSQTVJfUhMRm03fTRBMXJMUVZNNTV%2FPGdGdWhVcicpJ2N3amhWYHdzYHcnP3F3cGApJ2lkfGpwcVF8dWAnPyd2bGtiaWBabHFgaCcpJ2BrZGdpYFVpZGZgbWppYWB3dic%2FcXdwYHgl"
}
ERROR - 2021-08-22 15:44:16 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:44:16 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:44:16 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:48:06 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:48:06 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:48:06 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:48:28 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:48:28 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:48:43 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:48:43 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:48:44 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:48:44 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:48:44 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:49:01 --> Stripe\Checkout\Session JSON: {
    "id": "cs_test_a1iMGiJ0fEFbaMWxTrHimIvOGOAzPnJQ9s63lxB1f2dFMc9ZwI6RKo1PtQ",
    "object": "checkout.session",
    "allow_promotion_codes": null,
    "amount_subtotal": 50000,
    "amount_total": 50000,
    "automatic_tax": {
        "enabled": false,
        "status": null
    },
    "billing_address_collection": null,
    "cancel_url": "https:\/\/money.geefto.com\/accounts\/admin\/payment\/stripe_failure",
    "client_reference_id": "ewallet_b43aed61d43f74d82b022422cfa26e22",
    "currency": "usd",
    "customer": null,
    "customer_details": null,
    "customer_email": null,
    "livemode": false,
    "locale": null,
    "metadata": {
        "user_id": "6",
        "transaction_id": "5121629661739369"
    },
    "mode": "payment",
    "payment_intent": "pi_1JRMfBFjgYMbRuS3EqYHSrtd",
    "payment_method_options": [],
    "payment_method_types": [
        "card"
    ],
    "payment_status": "unpaid",
    "setup_intent": null,
    "shipping": null,
    "shipping_address_collection": null,
    "submit_type": "pay",
    "subscription": null,
    "success_url": "https:\/\/money.geefto.com\/accounts\/admin\/payment\/stripe_success?session_id={CHECKOUT_SESSION_ID}",
    "total_details": {
        "amount_discount": 0,
        "amount_shipping": 0,
        "amount_tax": 0
    },
    "url": "https:\/\/checkout.stripe.com\/pay\/cs_test_a1iMGiJ0fEFbaMWxTrHimIvOGOAzPnJQ9s63lxB1f2dFMc9ZwI6RKo1PtQ#fidkdWxOYHwnPyd1blpxYHZxWjA0TUxBZkhDb2JcSGdXcFY2VFZiNEF8Z0lwZ08zbUdudDBBNXdqd0didXR%2FRzVgRDRKS3Q3U3IxVEBPSTdmUkt0fzR2UFVSQTVJfUhMRm03fTRBMXJMUVZNNTV%2FPGdGdWhVcicpJ2N3amhWYHdzYHcnP3F3cGApJ2lkfGpwcVF8dWAnPyd2bGtiaWBabHFgaCcpJ2BrZGdpYFVpZGZgbWppYWB3dic%2FcXdwYHgl"
}
ERROR - 2021-08-22 15:49:01 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:49:01 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:49:01 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:49:33 --> Severity: error --> Exception: Call to undefined method stdClass::site() /home/xeninipq/money.geefto.com/accounts/application/controllers/admin/Payment.php 537
ERROR - 2021-08-22 15:51:47 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:51:47 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:52:01 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:52:01 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:52:01 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:52:01 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:52:01 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:52:01 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:52:01 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:52:01 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:52:14 --> Stripe\Checkout\Session JSON: {
    "id": "cs_test_a1ktpqQPZcVK3YMgPP0lQYavJYgHLjU53jbV79PvsYSH0lS0cAwHxmj6Mx",
    "object": "checkout.session",
    "allow_promotion_codes": null,
    "amount_subtotal": 50000,
    "amount_total": 50000,
    "automatic_tax": {
        "enabled": false,
        "status": null
    },
    "billing_address_collection": null,
    "cancel_url": "https:\/\/money.geefto.com\/accounts\/admin\/payment\/stripe_failure",
    "client_reference_id": "ewallet_b43aed61d43f74d82b022422cfa26e22",
    "currency": "usd",
    "customer": null,
    "customer_details": null,
    "customer_email": null,
    "livemode": false,
    "locale": null,
    "metadata": {
        "user_id": "6",
        "transaction_id": "9671629661931293"
    },
    "mode": "payment",
    "payment_intent": "pi_1JRMiHFjgYMbRuS3nP8zROQ4",
    "payment_method_options": [],
    "payment_method_types": [
        "card"
    ],
    "payment_status": "unpaid",
    "setup_intent": null,
    "shipping": null,
    "shipping_address_collection": null,
    "submit_type": "pay",
    "subscription": null,
    "success_url": "https:\/\/money.geefto.com\/accounts\/admin\/payment\/stripe_success?session_id={CHECKOUT_SESSION_ID}",
    "total_details": {
        "amount_discount": 0,
        "amount_shipping": 0,
        "amount_tax": 0
    },
    "url": "https:\/\/checkout.stripe.com\/pay\/cs_test_a1ktpqQPZcVK3YMgPP0lQYavJYgHLjU53jbV79PvsYSH0lS0cAwHxmj6Mx#fidkdWxOYHwnPyd1blpxYHZxWjA0TUxBZkhDb2JcSGdXcFY2VFZiNEF8Z0lwZ08zbUdudDBBNXdqd0didXR%2FRzVgRDRKS3Q3U3IxVEBPSTdmUkt0fzR2UFVSQTVJfUhMRm03fTRBMXJMUVZNNTV%2FPGdGdWhVcicpJ2N3amhWYHdzYHcnP3F3cGApJ2lkfGpwcVF8dWAnPyd2bGtiaWBabHFgaCcpJ2BrZGdpYFVpZGZgbWppYWB3dic%2FcXdwYHgl"
}
ERROR - 2021-08-22 15:52:56 --> Severity: error --> Exception: Call to a member function update_master_wallet() on null /home/xeninipq/money.geefto.com/accounts/application/controllers/admin/Payment.php 613
ERROR - 2021-08-22 15:55:09 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:55:09 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:55:21 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:55:21 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:55:21 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:55:21 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:55:21 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:55:34 --> Stripe\Checkout\Session JSON: {
    "id": "cs_test_a1ONiY0vgXdhwCnFitkGHDv7JW06vuW3FBX0iZD5x4Fha8j6GpYpXttQCI",
    "object": "checkout.session",
    "allow_promotion_codes": null,
    "amount_subtotal": 50000,
    "amount_total": 50000,
    "automatic_tax": {
        "enabled": false,
        "status": null
    },
    "billing_address_collection": null,
    "cancel_url": "https:\/\/money.geefto.com\/accounts\/admin\/payment\/stripe_failure",
    "client_reference_id": "ewallet_b43aed61d43f74d82b022422cfa26e22",
    "currency": "usd",
    "customer": null,
    "customer_details": null,
    "customer_email": null,
    "livemode": false,
    "locale": null,
    "metadata": {
        "user_id": "6",
        "transaction_id": "6911629662133365"
    },
    "mode": "payment",
    "payment_intent": "pi_1JRMlWFjgYMbRuS3Qka5XvDL",
    "payment_method_options": [],
    "payment_method_types": [
        "card"
    ],
    "payment_status": "unpaid",
    "setup_intent": null,
    "shipping": null,
    "shipping_address_collection": null,
    "submit_type": "pay",
    "subscription": null,
    "success_url": "https:\/\/money.geefto.com\/accounts\/admin\/payment\/stripe_success?session_id={CHECKOUT_SESSION_ID}",
    "total_details": {
        "amount_discount": 0,
        "amount_shipping": 0,
        "amount_tax": 0
    },
    "url": "https:\/\/checkout.stripe.com\/pay\/cs_test_a1ONiY0vgXdhwCnFitkGHDv7JW06vuW3FBX0iZD5x4Fha8j6GpYpXttQCI#fidkdWxOYHwnPyd1blpxYHZxWjA0TUxBZkhDb2JcSGdXcFY2VFZiNEF8Z0lwZ08zbUdudDBBNXdqd0didXR%2FRzVgRDRKS3Q3U3IxVEBPSTdmUkt0fzR2UFVSQTVJfUhMRm03fTRBMXJMUVZNNTV%2FPGdGdWhVcicpJ2N3amhWYHdzYHcnP3F3cGApJ2lkfGpwcVF8dWAnPyd2bGtiaWBabHFgaCcpJ2BrZGdpYFVpZGZgbWppYWB3dic%2FcXdwYHgl"
}
ERROR - 2021-08-22 15:55:34 --> Could not find the language line "resourcess"
ERROR - 2021-08-22 15:55:34 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:55:34 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 15:56:19 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 15:56:19 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 17:30:07 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 17:30:07 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 17:30:14 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 17:30:14 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 17:31:13 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 17:31:13 --> Could not find the language line "password-reset-msg"
ERROR - 2021-08-22 17:31:17 --> Could not find the language line "valid-user-msg"
ERROR - 2021-08-22 17:31:17 --> Could not find the language line "password-reset-msg"
