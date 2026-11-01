import 'coffee.dart';

enum OrderStatus {
  received,
  preparing,
  ready,
  completed;

  String get label => switch (this) {
        OrderStatus.received => 'Order received',
        OrderStatus.preparing => 'Being prepared',
        OrderStatus.ready => 'Ready for pickup',
        OrderStatus.completed => 'Completed',
      };

  String get helperText => switch (this) {
        OrderStatus.received => 'The cafe has received your order.',
        OrderStatus.preparing => 'The barista is preparing your coffee.',
        OrderStatus.ready => 'Your order is ready. Enjoy!',
        OrderStatus.completed => 'Thanks for visiting Caffeine Cafe.',
      };
}

class CartLine {
  const CartLine({required this.coffee, required this.quantity});

  final Coffee coffee;
  final int quantity;

  double get total => coffee.price * quantity;
}

class CafeOrder {
  const CafeOrder({
    required this.id,
    required this.customerName,
    required this.phone,
    required this.lines,
    required this.total,
    required this.createdAt,
    this.status = OrderStatus.received,
  });

  final String id;
  final String customerName;
  final String phone;
  final List<CartLine> lines;
  final double total;
  final DateTime createdAt;
  final OrderStatus status;

  int get itemCount =>
      lines.fold<int>(0, (count, line) => count + line.quantity);
}
