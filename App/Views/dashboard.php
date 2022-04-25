<div>
    <div class="page-hero page-container " id="page-hero">
        <div class="padding d-flex">
            <div class="page-title">
                <h2 class="text-md text-highlight">Bài viết</h2>
                <small class="text-muted">Quản lý bài viết</small>
            </div>
        </div>
    </div>
    <div class="page-content page-container">
        <div class="padding py-0">
            <a href="?controller=post&action=create" class="btn btn-success text-light">Tạo mới</a>
        </div>
    </div>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="table-responsive">
                <table id="datatable" class="table table-theme table-row v-middle" data-plugin="dataTable">
                    <thead>
                    <tr>
                        <th><span class="text-muted">STT</span></th>
                        <th><span class="text-muted">Tiêu đề</span></th>
                        <th><span class="text-muted">Nội dung</span></th>
                        <th><span class="text-muted">Đã tạo</span></th>
                        <th><span class="text-muted">Đã cập nhật</span></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $count = 0; ?>
                    <?php foreach ($posts as $post) { ?>
                        <?php $count++; ?>
                        <tr class=" " data-id="<?php echo $post->id ?>">
                            <td style="width:30px;text-align:center">
                                <small class="text-muted"><?php echo $count ?></small>
                            </td>
                            <td style="width:120px">
                                <?php echo $post->title ?>
                            </td>
                            <td class="flex" style="max-width: 500px">
                                <div class="item-except h-2x">
                                    <?php echo $post->content ?>
                                </div>
                            </td>
                            <td>
                                <?php echo (($post->created_at != null) ? $post->created_at : 'Không xác định') ?>
                            </td>
                            <td>
                                <?php echo (($post->updated_at != null) ? $post->updated_at : 'Không xác định') ?>
                            </td>
                            <td>
                                <div class="item-action dropdown">
                                    <a href="#" data-toggle="dropdown" class="text-muted">
                                        <i data-feather="more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu">
                                        <a href="?controller=post&action=edit&post_id=<?php echo $post->id ?>" class="dropdown-item">
                                            Sửa
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="?controller=post&action=delete&post_id=<?php echo $post->id ?>" class="dropdown-item btn-delete">
                                            Xoá
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
