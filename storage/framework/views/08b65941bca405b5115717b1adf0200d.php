<form id="createBinForm" action="<?php echo e(route('bins.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="hidden" id="latitude"name="latitude">
    <input type="hidden" id="longitude" name="longitude">
    <label for="name">Name:</label> <input type="text" id="name" name="name" required>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
    <button type="submit"class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"> Submit
    </button>
</form>
<?php /**PATH /home/collins/Downloads/project/project reseach/Start/Ongoing/new/project-lander/resources/views/components/create-bin-form.blade.php ENDPATH**/ ?>