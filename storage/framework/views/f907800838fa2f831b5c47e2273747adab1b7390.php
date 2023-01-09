<!DOCTYPE html>

<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="This season, the prizes are insane. Once they're gone, they're gone. From Premium Memberships to $1,000 store credits! The Contest ends on January 15th, 2023.">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
        <meta property="og:description" content="This season, the prizes are insane. Once they're gone, they're gone. From Premium Memberships to $1,000 store credits! The Contest ends on January 15th, 2023.">
        <meta property="og:title" content="Holiday Spin-n-Win 2022">
        <meta property="twitter:card" content="summary_large_image">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


        <title>Holiday Spin-n-Win 2022</title>
    </head>
    <body>
    <div id="app">
        <Static :token="<?php echo e(json_encode($token)); ?>" <?php if(!empty($user)): ?>:user="<?php echo e(json_encode($user)); ?>"<?php endif; ?> <?php if(!empty($spin_info)): ?>:spin="<?php echo e(json_encode($spin_info)); ?>"<?php endif; ?> <?php if(!empty($free_attempt_available_time_at)): ?>:free="<?php echo e(json_encode($free_attempt_available_time_at)); ?>"<?php endif; ?>></Static>
    </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\xmas2022\resources\views/main.blade.php ENDPATH**/ ?>