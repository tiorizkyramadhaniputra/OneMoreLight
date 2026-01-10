<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title ?? 'PT Charoen Pokphand Indonesia Tbk'); ?></title>
    <meta name="description" content="<?php echo e($description ?? 'Membangun Ketahanan Pangan Nasional'); ?>">
    
    <!-- Google Fonts: Geist / Inter (Using Inter as generic sans for now or exact Google Font link if known) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        // Add custom colors if needed based on globals.css or component inline styles
                    }
                }
            }
        }
    </script>
    
    <!-- Custom Styles -->
    <style>
        /* globals.css emulation */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="antialiased font-sans bg-white text-gray-900">
    
    <?php echo $__env->make('public.partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <main class="min-h-screen">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <?php echo $__env->make('public.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html>
<?php /**PATH C:\laragon\www\OneMoreLightLP\resources\views/layouts/app.blade.php ENDPATH**/ ?>