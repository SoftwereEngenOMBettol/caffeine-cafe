# Caffeine Cafe — Flutter Mobile App

A polished coffee-shop ordering app built with **Flutter and Dart**. This mobile client is added alongside the original PHP/MySQL website in the parent repository; it does not replace or modify the existing web application.

## Features

- Browse a menu of coffee drinks with product images and Omani Rial prices
- Search by drink name or description
- Filter by Espresso, Latte, Cold and Brew categories
- Open product details and add drinks to the cart
- Increase/decrease quantities, remove items and calculate the subtotal
- Place a pickup order with basic customer details
- Review locally placed orders and their current status
- Responsive Material 3 interface with empty states and image fallbacks

## Tech stack

- Flutter
- Dart
- Material 3
- ChangeNotifier for lightweight cart state management
- Flutter unit tests

The app intentionally starts without Firebase or a paid backend. Menu data is local to the app, and cart/order data remains in memory while the app is running. Checkout is a demonstration pickup flow: it does **not** process payments or write orders to the original PHP/MySQL database.

## Requirements

- Flutter SDK (stable channel)
- Dart SDK included with Flutter
- Android Studio / Android SDK, Xcode, or Chrome depending on the target

## Run locally

From the repository root:

    cd mobile_app

    # Generate Android/iOS/web runner folders for your installed Flutter SDK.
    # Run this once when setting up the project for the first time.
    flutter create .

    flutter pub get
    flutter run

To run on Chrome (after generating the web runner):

    flutter run -d chrome

## Quality checks

    dart format lib test
    flutter analyze
    flutter test

The repository-level GitHub Actions workflow at .github/workflows/flutter-mobile.yml runs formatting, analysis and tests whenever files under mobile_app/ change.

## Project structure

    mobile_app/
    ├── lib/
    │   ├── data/coffee_menu.dart
    │   ├── models/
    │   │   ├── cafe_order.dart
    │   │   └── coffee.dart
    │   ├── state/cart_store.dart
    │   └── main.dart
    ├── test/cart_store_test.dart
    ├── analysis_options.yaml
    └── pubspec.yaml

## Next engineering steps

1. Add Firebase or Supabase authentication and persistent order storage.
2. Connect the mobile client to a secured restaurant API.
3. Add a staff dashboard to update order states.
4. Integrate a payment provider before accepting online payments.

## Screenshots

Add emulator screenshots to a screenshots/ folder and link them here after running the app locally.
