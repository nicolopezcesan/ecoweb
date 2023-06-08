<?php

$branches_json = file_get_contents("data/branches.json");
$countries = json_decode($branches_json, false);
?>

<div class="branches">
  <?php foreach ($countries as $country) { ?>
  <div class="row">
    <div class="col-sm-12 branch-title">
      <h3><?php echo $country->country; ?></h3>
    </div>

    <?php foreach ($country->branches as $branch) { ?>
    <div class="col-sm-3 branch-item">
      <h5><?php echo $branch->name; ?></h5>
      <h6><?php echo $branch->description; ?></h6>
      <p class="address">
        <?php echo $branch->address; ?>
      </p>

      <p><img src="/assets/images/phone.svg" alt="<?php echo $branch->phone; ?>"
             class="icon" /> <?php echo $branch->phone; ?></p>
      <?php if ($branch->cellphone !== "") { ?>
      <p><img src="/assets/images/cellphone.svg"
             alt="<?php echo $branch->cellphone; ?>" class="icon" />
        <?php echo $branch->cellphone; ?></p>
      <?php } ?>
      <a href="mailto:<?php echo $branch->email; ?>"><img
             src="/assets/images/mail.svg" alt="" class="icon" />
        <?php echo $branch->email; ?></a>
    </div>
    <?php } ?>

  </div>
  <?php } ?>
</div>