<?php

namespace App\Filament\Pages;

use App\Enums\Role;
use Filament\Actions\Action;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Concerns\InteractsWithInfolists;
use Filament\Infolists\Contracts\HasInfolists;
use Filament\Infolists\Infolist;
use Filament\Notifications\Notification;
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Pages\Dashboard;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 * @property Form $form
 */
class VolunteerInvitation extends Page implements HasInfolists, HasForms
{
    use InteractsWithFormActions;
    use InteractsWithInfolists;

    protected static ?string $title = 'Bergabung menjadi Volunteer';
    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.volunteer-invitation';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();

        abort_if(boolean: Auth::user()->hasRole(roles: Role::volunteer->value), code: Response::HTTP_FORBIDDEN, message: "Kamu sudah menjadi Volunteer");
    }

    public function form(Form $form): Form
    {
        return $form->schema(
            components: [
                Checkbox::make(name: 'agreement')
                    ->label(label: 'Dengan bergabung menjadi Volunteer saya menyetujui semua terms & condition')
                    ->required()
            ]
        )
        ->statePath('data');
    }

    public function join(): void
    {
        $this->form->getState();

        Auth::user()->assignRole(roles: Role::volunteer->value);

        Notification::make()
            ->success()
            ->title(title: 'Selamat Bergabung di EcoBreathe')
            ->body(body: 'Kamu berhasil menjadi Volunteer di EcoBreathe kamu akan kami arahkan ke halaman untuk melengkapi data')
            ->send();

        $this->redirect(url: Dashboard::getUrl());
    }

    public function termConditionsInfoList(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema(components: [
                TextEntry::make(name: 'term_conditions')
                    ->label(label: 'Terms & Conditions')
                    ->html()
                    ->state(state: "
                        Syarat & Ketentuan Menjadi Relawan <br/>
                        Senang sekali Anda tertarik menjadi relawan! Kontribusi Anda sangatlah berarti bagi program/kegiatan kami. Sebelum bergabung, mohon baca dengan seksama Syarat & Ketentuan berikut:
                        <br/>
                        <br/>
                        1. Kualifikasi Relawan:
                        <br/>
                        Berusia minimal 17 tahun (dengan izin orang tua untuk yang berusia di bawah 18 tahun).
                        Memiliki komitmen dan dedikasi untuk berkontribusi secara sukarela.
                        Bertanggung jawab, disiplin, dan memiliki motivasi diri yang tinggi.
                        Memiliki kemampuan bekerja sama dalam tim dan berinteraksi dengan berbagai pihak.
                        Memiliki kondisi kesehatan yang baik dan sanggup mengikuti aktivitas program/kegiatan.
                        Memiliki keterampilan yang relevan dengan program/kegiatan (opsional).
                        <br/>
                        <br/>
                        2. Komitmen Relawan:
                        <br/>
                        Mengikuti sesi orientasi/pembekalan yang disediakan penyelenggara.
                        Melaksanakan tugas-tugas yang diberikan sesuai dengan arahan panitia.
                        Menjaga sikap dan perilaku yang baik selama program/kegiatan berlangsung.
                        Menjaga kerahasiaan informasi terkait program/kegiatan.
                        Menjaga kebersihan dan kelengkapan peralatan yang digunakan.
                        Memberikan laporan atau evaluasi program/kegiatan setelah selesai.
                        <br/>
                        <br/>
                        3. Hak & Kewajiban Relawan:
                        <br/>
                        <br/>
                        Hak:
                        Mendapatkan pembekalan/orientasi program/kegiatan.
                        Mendapatkan konsumsi selama mengikuti program/kegiatan (sesuai ketentuan).
                        Mendapatkan sertifikat keikutsertaan (sesuai ketentuan).
                        Mendapatkan pengalaman dan pengembangan keterampilan baru.
                        Mendapat apresiasi atas kontribusi yang diberikan.
                        Kewajiban:
                        Mematuhi Syarat & Ketentuan yang telah ditetapkan.
                        Mengerjakan tugas yang diberikan dengan sungguh-sungguh.
                        Menjaga hubungan baik dengan sesama relawan dan panitia.
                        Menjaga ketertiban dan nama baik program/kegiatan.
                        Mengikuti aturan dan kebijakan yang berlaku di lokasi program/kegiatan.
                        <br/>
                        <br/>
                        4. Pendaftaran Relawan:
                        <br/>
                        Pendaftaran relawan dilakukan melalui formulir online/offline yang disediakan penyelenggara.
                        Penyelenggara berhak melakukan seleksi terhadap calon relawan berdasarkan kualifikasi dan kebutuhan program/kegiatan.
                        Keputusan penyelenggara mengenai penerimaan atau penolakan calon relawan bersifat final dan tidak dapat diganggu gugat.
                        <br/>
                        <br/>
                        5. Lain-lain:
                        <br/>
                        <br/>
                        Penyelenggara tidak bertanggung jawab atas kecelakaan atau kejadian lain yang menimpa relawan selama program/kegiatan berlangsung, kecuali kelalaian penyelenggara terbukti.
                        Relawan tidak berhak mendapatkan gaji atau imbalan finansial lainnya atas keterlibatannya dalam program/kegiatan.
                        Dengan mendaftar menjadi relawan, Anda dianggap telah menyetujui dan memahami Syarat & Ketentuan ini.
                        Catatan:
                        <br/>
                        <br/>
                        Syarat & Ketentuan ini dapat disesuaikan dengan jenis program/kegiatan dan kebijakan masing-masing penyelenggara.
                        Pastikan Anda selalu mengikuti informasi terbaru terkait pendaftaran dan ketentuan relawan melalui platform komunikasi yang disediakan penyelenggara.
                        Semoga informasinya bermanfaat! Kami tunggu kontribusi Anda dalam program/kegiatan yang akan datang.
                        <br/>
                        <br/>
                        <br/>
                        Salam Hangat,
                        <br/>
                        EcoBreathe
                    "),
            ]);
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('join')
                ->label("Gabung jadi volunteer")
                ->submit('join')
                ->keyBindings(['mod+s'])
        ];
    }
}
