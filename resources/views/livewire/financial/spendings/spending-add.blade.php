<div>
    <!-- Message -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <!-- Header -->
    <div class="row mb-4 d-flex justify-content-between">
        <div class="col-lg-4 text-right">
            <h3 class="h3 mb-0">
                إدارة الصرفيات 
            </h3>
        </div>
        <!-- Collapse button -->
        <div class="col-lg-4">
            <button type="button" class="btn btn-primary btn-sm btn-icon-label" type="button" data-toggle="collapse" data-target="#addSpendingCollapse" aria-expanded="false" aria-controls="addSpendingCollapse">
                <span class="btn-inner--icon">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="btn-inner--text">
                    إضافة صرفية
                </span>
            </button>
        </div>
    </div>
    <!-- Collapse body -->
    <div class="collapse" id="addSpendingCollapse">
        <div class="card card-body">
            <!-- Form start -->
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group text-right">
                            <label class="form-control-label text-right">مقدار المصروف</label>
                            <input class="form-control @error('amount') is-invalid @enderror" type="text" wire:model="amount" placeholder="ادخل المقدار هنا">
                            @error('amount')
                                <small class="form-text mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group text-right">
                            <label class="form-control-label text-right">النوع</label>
                            <select class="custom-select" wire:model="type">
                                <option disabled selected>حدد نوع الصرفية</option>
                                <option value="نوع 1">نوع 1</option>
                                <option value="نوع 2">نوع 2</option>
                                <option value="نوع 3">نوع 3</option>
                            </select>
                            @error('type')
                                <small class="form-text mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="form-group text-right">
                            <label class="form-control-label text-right">التاريخ</label>
                            <input type="text" class="form-control @error('date') is-invalid @enderror" data-toggle="date" wire:model="date" placeholder="ادخل التاريخ هنا">
                            @error('date')
                                <small class="form-text mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group text-right">
                            <label class="form-control-label text-right">الوقت</label>
                            <input type="text" class="form-control @error('time') is-invalid @enderror" data-toggle="time" wire:model="time" placeholder="ادخل الوقت هنا">
                            @error('time')
                                <small class="form-text mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group text-right">
                            <label class="form-control-label">الوصف</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" type="text" wire:model="description" placeholder="اكتب الوصف هنا"> </textarea>
                            @error('description')
                                <small class="form-text mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div
                    x-data="{ isUploading: false, progress: 0 }"
                    x-on:livewire-upload-start="isUploading = true"
                    x-on:livewire-upload-finish="isUploading = false"
                    x-on:livewire-upload-error="isUploading = false"
                    x-on:livewire-upload-progress="progress = $event.detail.progress"
                    class="col-md-12">
                        <div class="form-group text-right">
                            <label class="form-control-label">الوصل</label>
                            <input class="form-control @error('bill') is-invalid @enderror" wire:model="bill" type="file" placeholder="اختر الصورة من هنا">
                            @error('bill')
                                <small class="form-text mt-2 text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div x-show="isUploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 d-flex justify-content-start">
                        <button type="button" class="btn btn-primary btn-sm btn-icon-label" wire:click="insert()">
                            <span class="btn-inner--icon">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="btn-inner--text">
                                إضافة
                            </span>
                        </button>
                    </div>
                </div>
            </form>
            <!-- End form -->
            <script>
                $(document).ready(function() {
                    $('.js-select2').select2();
                });
            </script>
        </div>
    </div>
</div>
