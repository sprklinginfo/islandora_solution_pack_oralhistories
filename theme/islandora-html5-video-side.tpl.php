<div class="row">
  <div class="col-sm-6 col-md-6">
    <div data-transcripts-role="video" data-transcripts-id="<?php print $params['trid']; ?>">
      <div align="center" class="embed-responsive embed-responsive-4by3">
        <video class="video-js vjs-default-skin embed-responsive-item" controls preload="auto"  width="100%" height="360" data-setup="{}">
          <source src="<?php print $params['url']; ?>" type="<?php print $params['mime']; ?>"/>
          <?php if ($params['tracks'] && $params['enable_transcript_display']): ?>
            <?php foreach ($params['tracks'] as $key => $track): ?>
              <track id="track<?php print $key; ?>" src="<?php print $track['source_url']; ?>" srclang="<?php print $track['lang_code']; ?>"
                 kind="captions" label="<?php print $track['lang_code']; ?>" default>
            <?php endforeach; ?>
          <?php endif; ?>
        </video>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-6">
    <?php if (array_key_exists('transcript_content', $params)) { print $params['transcript_content']; } ?>
  </div>
</div>