﻿// <auto-generated />
using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Infrastructure;
using Microsoft.EntityFrameworkCore.Metadata;
using Microsoft.EntityFrameworkCore.Storage.ValueConversion;
using TestWebMvc.Data;

namespace TestWebMvc.Migrations
{
    [DbContext(typeof(TestWebMvcContext))]
    partial class TestWebMvcContextModelSnapshot : ModelSnapshot
    {
        protected override void BuildModel(ModelBuilder modelBuilder)
        {
#pragma warning disable 612, 618
            modelBuilder
                .UseIdentityColumns()
                .HasAnnotation("Relational:MaxIdentifierLength", 128)
                .HasAnnotation("ProductVersion", "5.0.2");

            modelBuilder.Entity("TestWebMvc.Models.Customer", b =>
                {
                    b.Property<int>("Customer_Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int")
                        .HasColumnName("customer_id")
                        .UseIdentityColumn();

                    b.Property<string>("Customer_Name")
                        .IsRequired()
                        .HasMaxLength(100)
                        .HasColumnType("nvarchar(100)")
                        .HasColumnName("customer_name");

                    b.Property<int>("cat_id")
                        .HasColumnType("int");

                    b.HasKey("Customer_Id");

                    b.HasIndex("cat_id");

                    b.ToTable("customers");
                });

            modelBuilder.Entity("TestWebMvc.Models.CustomerCat", b =>
                {
                    b.Property<int>("Cat_Id")
                        .ValueGeneratedOnAdd()
                        .HasColumnType("int")
                        .HasColumnName("cat_id")
                        .UseIdentityColumn();

                    b.Property<string>("Cat_Name")
                        .IsRequired()
                        .HasMaxLength(50)
                        .HasColumnType("nvarchar(50)")
                        .HasColumnName("cat_name");

                    b.HasKey("Cat_Id");

                    b.ToTable("customers_cats");
                });

            modelBuilder.Entity("TestWebMvc.Models.Customer", b =>
                {
                    b.HasOne("TestWebMvc.Models.CustomerCat", "Cat_Id")
                        .WithMany()
                        .HasForeignKey("cat_id")
                        .OnDelete(DeleteBehavior.Cascade)
                        .IsRequired();

                    b.Navigation("Cat_Id");
                });
#pragma warning restore 612, 618
        }
    }
}
