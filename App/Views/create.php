<div>
    <div class="page-hero page-container " id="page-hero">
        <div class="padding d-flex">
            <div class="page-title">
                <h2 class="text-md text-highlight">Bài viết</h2>
                <small class="text-muted">Tạo mới bài viết</small>
            </div>
        </div>
    </div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row">
                <div class="col-12">
                    <form data-plugin="parsley" data-option="{}" method="post" action="?controller=post&action=insert">
                        <div class="card">
                            <div class="card-header">
                                <strong>Tạo mới</strong>
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label>Tiêu đề</label>
                                        <input value="<?php if(isset($title_value)) echo $title_value ?>" type="text" name="title" class="form-control" placeholder="Hãy nhập tiêu đề" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <div class="mb-3 card">
                                        <textarea id="summernote" data-plugin="summernote" data-option="{}" name="content" required>
                                            <?php
                                            if (isset($content_value)) {
                                                echo $content_value;
                                            } else { ?>
                                                <p class="text-muted">Hãy nhập nội dung</p>
                                            <?php } ?>
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <p class="text-danger">
                                        <?php
                                        if (isset($error)) echo $error;
                                        ?>
                                    </p>
                                </div>
                                <div class="text-center pt-2">
                                    <button type="submit" class="btn btn-primary mr-2">Tạo mới</button>
                                    <a href="/" class="btn btn-warning text-light">Trở về</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
