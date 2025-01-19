<?php if (!empty($err)): ?>
    <div class="error">
        <?php foreach ($err as $error): ?>
            <p><?php echo htmlspecialchars($error); ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
