@props(['title' => '', 'count' => 0])

<div class="col-md-4"
     style="width: 466px;margin-right: 70px;border-radius: 25px;background: rgba(223, 185, 123, 1);box-shadow: 0 0 15px rgba(53, 51, 45, 1);">
    <a {{ $attributes(['style' => 'color:transparent']) }}>
        <div class="d-xxl-flex align-items-xxl-start"
             style="height: 105px;width: 466px;margin-left: 0px;margin-top: 0px;">
            <p class="text-center d-xxl-flex justify-content-xxl-center align-items-xxl-center"
               style="height: 105px;margin-bottom: 0px;width: 466px;margin-top: 0px;color: rgba(53, 51, 45, 1);text-align: center;font-family: 'Inter';font-size: 30px;font-weight: bold;">
                <span style="background-color: rgb(223, 185, 123);">{{ $title }}</span>
            </p>
        </div>
        <div class="d-flex justify-content-center" style="height: 105px;width: 466px;margin-left: 0px;">
            <p class="text-white" style="font-family: Inter; font-size: 34px;">{{ $count }}</p>
        </div>
    </a>
</div>