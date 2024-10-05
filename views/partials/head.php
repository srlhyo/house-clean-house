<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEROOMIES <?= $heading; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sidebar-bg': '#f3f4f6',
                        'sidebar-hover': '#e5e7eb',
                        'sidebar-active': '#3b82f6',
                    }
                }
            }
        }
    </script>
</head>
<body class="min-h-screen flex bg-gray-100">