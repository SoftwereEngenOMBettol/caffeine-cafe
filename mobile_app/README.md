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
- Save orders and staff status changes on the device between app launches
- Open a restaurant staff dashboard with order counts, total order value and status management
- Responsive Material 3 interface with empty states and image fallbacks

## Tech stack

- Flutter
- Dart
- Material 3
- ChangeNotifier for lightweight cart state management
- Flutter unit tests
- SharedPreferences for device-local order persistence

The app intentionally starts without Firebase or a paid backend. Menu data and the cart are local to the app. Orders and staff status changes are persisted on the current device using SharedPreferences, so they survive app restarts on that device. This is not cloud synchronization: other phones and the existing PHP/MySQL website cannot see these orders. Checkout is a demonstration pickup flow and does **not** process payments.

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
2. Add staff authentication and role-based access before exposing the dashboard to real restaurant employees.
3. Connect customer and staff apps to a secured shared restaurant API so multiple devices see the same orders.
4. Integrate a payment provider before accepting online payments.

## Screenshots

Add emulator screenshots to a screenshots/ folder and link them here after running the app locally.
